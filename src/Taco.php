<?php


namespace ElePHPant;


use GuzzleHttp\Client;

/**
 * Class Taco
 * @author Sérgio Danilo Jr <sergiodanilojr@hotmail.com>
 * @see https://taco-food-api.herokuapp.com/
 * @package ElePHPant
 */
class Taco
{
    /**
     * @var
     */
    private $client;
    /**
     * @var string
     */
    private $base;
    /**
     * @var
     */
    private $endpoint;
    /**
     * @var float
     */
    private $timeout = 2.0;
    /**
     * @var
     */
    private $method;

    /**
     * @var
     */
    private $response;

    /**
     * @var
     */
    private $code;

    /**
     * @var
     */
    private $message;

    /**
     * Request GET Method
     */
    private const REQUEST_GET = "GET";

    /**
     *
     */
    private const RESPONSE_ACCEPT = 200;


    /**
     * Taco constructor.
     */
    public function __construct()
    {
        $this->base = "https://taco-food-api.herokuapp.com/";
    }

    /**
     * @param $timeout
     * @return $this
     */
    public function setTimeout($seconds = 2): Taco
    {
        $this->timeout = (float)$seconds;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function categories(bool $decoded = true)
    {
        $call = $this->call("category")
            ->connect()
            ->getBody();

        if ($decoded) {
            return $this->decoder($call);
        }

        return $call;
    }

    /**
     * @param int $categoryId
     * @return mixed
     */
    public function category(int $categoryId, bool $decoded = true)
    {
        $call = $this->call("category/{$categoryId}")
            ->connect()
            ->getBody();

        if ($decoded) {
            return $this->decoder($call);
        }

        return $call;
    }

    /**
     * @param int $categoryId
     * @return mixed
     */
    public function foodFromCategory(int $categoryId, bool $decoded = true)
    {
        $call = $this->call("category/{$categoryId}/food")->connect()->getBody();
        if ($decoded) {
            return $this->decoder($call);
        }

        return $call;
    }

    /**
     * @param int $foodId
     * @return mixed
     */
    public function food(int $foodId, bool $decoded = true)
    {
        $call = $this->call("food/{$foodId}")->connect()->getBody();

        if ($decoded) {
            return $this->decoder($call);
        }

        return $call;
    }

    /**
     * @param $call
     * @return mixed
     */
    private function decoder($call)
    {
        return json_decode($call);
    }

    /**
     * @param $endpoint
     */
    private function setEndpoint($endpoint): void
    {
        $this->endpoint = "api/v1/{$endpoint}";
    }

    /**
     * @param string $endpoint
     * @param $method
     * @return mixed
     */
    private function call(string $endpoint, $method = self::REQUEST_GET): Taco
    {
        $this->setEndpoint($endpoint);
        $this->method = $method;
        return $this;
    }

    /**
     * @return Client
     */
    private function setClient(): Client
    {
        return $this->client = new Client([
            "base_uri" => $this->base,
            "timeout" => $this->timeout
        ]);
    }

    /**
     * @return \Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function connect()
    {
        $this->setClient();

        $this->response = $this->client->request($this->method, $this->endpoint);

        if ($this->code = $this->response->getStatusCode() !== self::RESPONSE_ACCEPT) {
            return $this->message = $this->response->getReasonPhrase();
        }

        return $this->response;
    }
}
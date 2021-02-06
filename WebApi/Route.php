<?php
    class Route
    {
        private $config = array();

        public function __construct()
        {
            
        }

        public function getMapping()
        {
            return $this->config;
        }

        public function getEndpointInfo($controller, $method)
        {
            $endpoint = $this->getEndpoint($controller, $method);
            foreach($this->config as $key => $value)
            {
                if(strtoupper($key) == strtoupper($endpoint))
                {
                    return $value;
                }
            }
        }

        public function getEndpoint($controller, $method)
        {
            return $controller."/".$method;
        }

        public function post($endpoint)
        {
            $this->setEndpoint($endpoint, "POST");
        }

        public function get($endpoint)
        {
            $this->setEndpoint($endpoint, "GET");
        }

        public function put($endpoint)
        {
            $this->setEndpoint($endpoint, "PUT");
        }

        public function patch($endpoint)
        {
            $this->setEndpoint($endpoint, "PATCH");
        }

        public function delete($endpoint)
        {
            $this->setEndpoint($endpoint, "DELETE");
        }

        public function copy($endpoint)
        {
            $this->setEndpoint($endpoint, "COPY");
        }

        public function head($endpoint)
        {
            $this->setEndpoint($endpoint, "HEAD");
        }

        public function options($endpoint)
        {
            $this->setEndpoint($endpoint, "OPTIONS");
        }

        public function link($endpoint)
        {
            $this->setEndpoint($endpoint, "LINK");
        }

        public function unlink($endpoint)
        {
            $this->setEndpoint($endpoint, "UNLINK");
        }

        public function purge($endpoint)
        {
            $this->setEndpoint($endpoint, "PURGE");
        }

        public function lock($endpoint)
        {
            $this->setEndpoint($endpoint, "LOCK");
        }

        public function unlock($endpoint)
        {
            $this->setEndpoint($endpoint, "UNLOCK");
        }

        public function propfind($endpoint)
        {
            $this->setEndpoint($endpoint, "PROPFIND");
        }

        public function view($endpoint)
        {
            $this->setEndpoint($endpoint, "VIEW");
        }

        private function setEndpoint($endpoint, $method)
        {
            $this->config[$endpoint] = ["METHOD" => $method];
        }
    }
?>
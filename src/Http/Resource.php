<?php

namespace Kamba\Http;

use Kamba\Kamba;

abstract class Resource
{

	/**
	 * Resource constructor.
	 *
	 * @param array $arguments
	 */
	public function __construct($arguments = [])
	{
		if (key_exists(Kamba::KAMBA_API_KEY, $arguments)) {
			Kamba::setApiKey($arguments[Kamba::KAMBA_API_KEY]);
		}

		if (key_exists(Kamba::KAMBA_API_URI, $arguments)) {
			Kamba::setApiUri($arguments[Kamba::KAMBA_API_URI]);
		}
		//$this->$KambaApiRequest = new Request;
	}

	/**
	 * The endpoint at default state that will hit the API.
	 *
	 * @return string
	 */
	abstract public function endpoint();

	/**
	 * Build url that will hit the API.
	 *
	 * @param int    $id                 The resource's id.
	 * @param string $additionalEndpoint Additional endpoint that will be appended to the URL.
	 *
	 * @return string
	 */
	public function url($id = null, $additionalEndpoint = null)
	{
		$endpoint = $this->endpoint();

		if (! is_null($id)) {
			$endpoint .= '/' . $id;
		}
		if (! is_null($additionalEndpoint)) {
			$endpoint .= '/' . $additionalEndpoint;
		}

		return $endpoint;
	}

	/**
	 * Create a new resource.
	 *
	 * @param array $form_params The request body.
	 *
	 * @return mixed
	 */
	public function create(array $form_params = [])
	{
		$KambaApiRequest = new Request;
		$response = $KambaApiRequest->request('POST', $this->url(), ['json' => $form_params]);
		return $response;
	}

	/**
	 * Get a specific resource.
	 *
	 * @param int $id The resource's id.
	 *
	 * @return mixed
	 */
	public function getById($id = null)
	{
		return $this->KambaApiRequest->request('GET', $this->url($id));
	}

	/**
	 * Get all resources.
	 *
	 * @param array $params Pagination and Filter parameters.
	 *
	 * @return mixed
	 */
	public function all(array $params = [])
	{
		return $this->KambaApiRequest->request('GET', $this->url(), ['query' => $params]);
	}


}

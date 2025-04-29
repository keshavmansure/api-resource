<?php


namespace Keshavmansure\ApiResource;

trait ApiResponseTrait
{

  protected const HTTP_OK = 200;
  protected const HTTP_CREATED = 201;
  protected const HTTP_BAD_REQUEST = 400;
  protected const HTTP_UNAUTHORIZED = 401;
  protected const HTTP_FORBIDDEN = 403;
  protected const HTTP_NOT_FOUND = 404;
  protected const HTTP_INTERNAL_SERVER_ERROR = 500;

  public function responseSuccess($data = [], $message = 'success', $status = self::HTTP_OK)
  {
    return response()->json([
      'status' => true,
      'message' => $message,
      'data' => $data,
    ], $status);
  }

  public function responseBadRequest($message = 'Bad Request', $status = self::HTTP_BAD_REQUEST)
  {
    return response()->json([
      'status' => false,
      'message' => $message,
    ], $status);
  }
  public function responseUnauthorized($message = 'Unauthorized', $status = self::HTTP_UNAUTHORIZED)
  {
    return response()->json([
      'status' => false,
      'message' => $message,
    ], $status);
  }
}

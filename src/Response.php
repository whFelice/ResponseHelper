<?php
/**
 * User: yinjiangchi
 * Date: 2017/1/23
 * Time: 15:30
 */
namespace whFelice\ResponseHelper;
trait Response
{
    /**
     * @param $status
     * @param null $info
     * @param null $data
     * @return \Illuminate\Http\JsonResponse
     */
    private function ajaxResponse($status, $info = null, $data = null)
    {
        return response()->json([
            'status' => $status,
            'info'   => ! is_null($info) ? $info : '',
            'data'   => ! is_null($data) ? $data : '',
        ]);
    }

    /**
     * @param null $info
     * @param null $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function ajaxSuccess($info = null, $data = null)
    {
        return $this->ajaxResponse('success',$info,$data);
    }

    /**
     * @param null $info
     * @param null $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function ajaxError($info = null, $data = null)
    {
        return $this->ajaxResponse('error',$info,$data);
    }
}
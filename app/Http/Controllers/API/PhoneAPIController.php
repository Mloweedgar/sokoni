<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePhoneAPIRequest;
use App\Http\Requests\API\UpdatePhoneAPIRequest;
use App\Models\Phone;
use App\Repositories\PhoneRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PhoneController
 * @package App\Http\Controllers\API
 */

class PhoneAPIController extends InfyOmBaseController
{
    /** @var  PhoneRepository */
    private $phoneRepository;

    public function __construct(PhoneRepository $phoneRepo)
    {
        $this->phoneRepository = $phoneRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/phones",
     *      summary="Get a listing of the Phones.",
     *      tags={"Phone"},
     *      description="Get all Phones",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Phone")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->phoneRepository->pushCriteria(new RequestCriteria($request));
        $this->phoneRepository->pushCriteria(new LimitOffsetCriteria($request));
        $phones = $this->phoneRepository->all();

        return $this->sendResponse($phones->toArray(), 'Phones retrieved successfully');
    }

    /**
     * @param CreatePhoneAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/phones",
     *      summary="Store a newly created Phone in storage",
     *      tags={"Phone"},
     *      description="Store Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Phone that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Phone")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Phone"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatePhoneAPIRequest $request)
    {
        $input = $request->all();

        $phones = $this->phoneRepository->create($input);

        return $this->sendResponse($phones->toArray(), 'Phone saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/phones/{id}",
     *      summary="Display the specified Phone",
     *      tags={"Phone"},
     *      description="Get Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Phone",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Phone"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Phone $phone */
        $phone = $this->phoneRepository->find($id);

        if (empty($phone)) {
            return Response::json(ResponseUtil::makeError('Phone not found'), 404);
        }

        return $this->sendResponse($phone->toArray(), 'Phone retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatePhoneAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/phones/{id}",
     *      summary="Update the specified Phone in storage",
     *      tags={"Phone"},
     *      description="Update Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Phone",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Phone that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Phone")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Phone"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatePhoneAPIRequest $request)
    {
        $input = $request->all();

        /** @var Phone $phone */
        $phone = $this->phoneRepository->find($id);

        if (empty($phone)) {
            return Response::json(ResponseUtil::makeError('Phone not found'), 404);
        }

        $phone = $this->phoneRepository->update($input, $id);

        return $this->sendResponse($phone->toArray(), 'Phone updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/phones/{id}",
     *      summary="Remove the specified Phone from storage",
     *      tags={"Phone"},
     *      description="Delete Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Phone",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Phone $phone */
        $phone = $this->phoneRepository->find($id);

        if (empty($phone)) {
            return Response::json(ResponseUtil::makeError('Phone not found'), 404);
        }

        $phone->delete();

        return $this->sendResponse($id, 'Phone deleted successfully');
    }
}

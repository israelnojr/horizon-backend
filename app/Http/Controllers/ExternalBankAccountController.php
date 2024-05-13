<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExternalBankAccountRequest;
use App\Services\ExternalBankAccountService;
use App\DTO\ExternalBankAccountDTO;

class ExternalBankAccountController extends Controller
{
    private $externalBankAccountService;

    public function __construct(ExternalBankAccountService $externalBankAccountService)
    {
        $this->externalBankAccountService = $externalBankAccountService;
    }

    public function store(ExternalBankAccountRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create DTO object
        $externalBankAccountDTO = new ExternalBankAccountDTO();
        $externalBankAccountDTO->user_id = $validatedData['user_id'];
        $externalBankAccountDTO->bankId = $validatedData['bankId'];
        $externalBankAccountDTO->accountId = $validatedData['accountId'];
        $externalBankAccountDTO->accessToken = $validatedData['accessToken'];
        $externalBankAccountDTO->fundingSourceUrl = $validatedData['fundingSourceUrl'];
        $externalBankAccountDTO->shareableId = $validatedData['shareableId'];

        // Save external bank account using DTO
        $externalBankAccount = $this->externalBankAccountService->saveExternalBankAccount($externalBankAccountDTO);
        
        return response()->json([
            'bankAccount' => $externalBankAccount,
            'message' => 'External bank account saved successfully'
        ]);
    }
}

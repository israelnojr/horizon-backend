<?php

namespace App\Services;

use App\DTO\ExternalBankAccountDTO;
use App\Models\ExternalBankAccount;

class ExternalBankAccountService
{
    public function saveExternalBankAccount(ExternalBankAccountDTO $dto)
    {
        $externalBankAccount = new ExternalBankAccount();
        $externalBankAccount->user_id = $dto->user_id;
        $externalBankAccount->bankId = $dto->bankId;
        $externalBankAccount->accountId = $dto->accountId;
        $externalBankAccount->accessToken = $dto->accessToken;
        $externalBankAccount->fundingSourceUrl = $dto->fundingSourceUrl;
        $externalBankAccount->shareableId = $dto->shareableId;
        
        $externalBankAccount->save();
        
        return $externalBankAccount;
    }
}

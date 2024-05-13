<?php

namespace App\DTO;

class ExternalBankAccountDTO
{
    public string $user_id;
    public string $bankId;
    public string $accountId;
    public string $accessToken;
    public string $fundingSourceUrl;
    public string $shareableId;
}

<?php

namespace App\Repositories\Phone;

use App\DienThoai;

class PhoneRepository implements PhoneRepositoryInterface {
    const PHONE_ACTIVE_STATUS = 1;
    public function findActivePhone()
    {
        return DienThoai::where('trang_thai', self::PHONE_ACTIVE_STATUS)->get();
    }
}
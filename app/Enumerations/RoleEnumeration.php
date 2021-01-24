<?php

namespace App\Enumerations;

abstract class RoleEnumeration extends BasicEnumeration {
    const PATIENT = 'PATIENT';
    const PHARMACIST = 'PHARMACIST';
    const PHARMACY_ADMIN = 'PHARMACY_ADMIN';
    const SYSTEM_ADMIN = 'SYSTEM_ADMIN';
    const DERMATOLOGIST = 'DERMATOLOGIST';
    const SUPPLIER = 'SUPPLIER';
}

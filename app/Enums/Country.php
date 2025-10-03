<?php

namespace App\Enums;

enum Country: string
{
    case United_States = "US";
    case Canada = "CA";
    case United_Kingdom = "GB";
    case Australia = "AU";
    case India = "IN";
    case Germany = "DE";
    case France = "FR";
    case Japan = "JP";
    case Brazil = "BR";
    case South_Africa = "ZA";

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ');
    }
}
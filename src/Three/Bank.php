<?php

namespace Billplz\Three;

class Bank extends Request
{
    /**
     * Check Bank Account Number.
     *
     * @param  string|int  $number
     *
     * @return \Laravie\Codex\Response
     */
    public function account($number)
    {
        return $this->send('GET', "check/bank_account_number/{$number}");
    }

    /**
     * Get list of bank for Bank Direct Feature.
     *
     * @return \Laravie\Codex\Response
     */
    public function supportedForFpx()
    {
        return $this->send('GET', 'fpx_banks');
    }
}

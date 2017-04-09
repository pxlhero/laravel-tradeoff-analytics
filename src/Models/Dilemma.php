<?php

namespace FindBrok\TradeoffAnalytics\Models;

use FindBrok\TradeoffAnalytics\Models\AbstractModel as Model;

class Dilemma extends Model
{
    /**
     * The Problem object that was submitted in the
     * call to the dilemmas method.
     *
     * @var \FindBrok\TradeoffAnalytics\Models\Problem\Problem
     */
    protected $problem;

    /**
     * A Resolution object that provides the resolution of
     * the decision problem.
     *
     * @var \FindBrok\TradeoffAnalytics\Models\Resolution\Resolution
     */
    protected $resolution;
}
<?php

interface Tax {
    public function calculate(Budget $budget);
}

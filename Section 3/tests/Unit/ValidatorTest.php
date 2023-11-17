<?php

it('validates a string', function () {
    expect(\Core\Validator::string('foobar'))->toBeTrue();
    expect(\Core\Validator::string(false))->toBeFalse();
    expect(\Core\Validator::string(''))->toBeFalse();
});

it('validates a string with minimum length value', function () {
    expect(\Core\Validator::string('foobar', 20))->toBeFalse();
});

it('validates an email', function () {
    expect(\Core\Validator::email('foobar'))->toBeFalse();
    expect(\Core\Validator::email('test@test.com'))->toBeTrue();
});

it('validates a number is greater than a given amount', function () {
    expect(\Core\Validator::greaterThan(10, 1))->toBeTrue();
    expect(\Core\Validator::greaterThan(1, 10))->toBeFalse();

});
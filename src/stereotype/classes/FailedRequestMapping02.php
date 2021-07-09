<?php
declare(strict_types=1);

namespace test\winterframework\stereotype\classes;

use dev\winterframework\stereotype\RestController;
use dev\winterframework\stereotype\web\RequestMapping;

#[RestController]
#[RequestMapping(path: "/failed/{p01}/")]
class FailedRequestMapping02 {
}

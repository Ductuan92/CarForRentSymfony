<?php

namespace App\Tests\Transformer;

use App\Entity\Cars;
use App\Entity\Rent;
use App\Entity\User;
use App\Transformer\RentTransformer;
use PHPUnit\Framework\TestCase;

class RentTransformerTest extends TestCase
{
    /**
     * @dataProvider arrayToObjectDataProvider
     * @return void
     */
    public function testArrayToObject($param, $expected)
    {
        $cars = $this->getMockBuilder(Cars::class)->disableOriginalConstructor()->getMock();
        $user = $this->getMockBuilder(User::class)->disableOriginalConstructor()->getMock();
        $rent = new Rent();
        $rentTransformer = new RentTransformer();
        $result = $rentTransformer->arrayToObject($cars, $user, $param);
        dd($result);
        $this->assertEquals($result, $rent);
    }

    public function arrayToObjectDataProvider()
    {
        return [
          'happy-case-1'=>[
              'param'=>[
                  'status'=>'rent'
              ],
              'expected'=> [

              ]
          ] ,
        ];
    }
}

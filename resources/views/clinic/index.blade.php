<?php
/**
 * Created by PhpStorm.
 * User: nguye
 * Date: 06/06/2017
 * Time: 08:59
 */
?>
@extends('layouts.app')
@section('content')
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <form action="" method="post">
                    <div class="col-md-2 pull-right">
                        <div class="form-group">
                            <input class="typeahead form-control border-input" type="text">
                        </div>
                        <div id="suggesstion-box"></div>
                    </div>
                </form>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Quản lý phòng khám</h4>
                            <p class="category">Phòng khám</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>Mã</th>
                                <th>Tên</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                </thead>
                                <tbody>
                                <?php foreach ($clinics as $clinic):?>
                                <tr>
                                    <td><?php echo $clinic['id']?></td>
                                    <td><?php echo $clinic['name']?></td>
                                    <td><?php echo $clinic['address']?></td>
                                    <td><?php echo $clinic['email']?></td>
                                    <td><?php echo $clinic['phone']?></td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="clearfix">
                        {!! $clinics->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


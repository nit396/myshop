@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="{!!url('/')!!}" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="{!!url('/giaynam')!!}" title=""> Giày nam</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">              
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                  <h3 class="pro-detail-title"><a href="{!!url('/giaynam/'.$data->id.'-'.$data->slug)!!}" title="">{!!$data->name!!}</a></h3>
                  <hr>
                  <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                      <div class="img-box">
                        <img class="img-responsive img-giaynam" src="{!!url('public/uploads/products/'.$data->images)!!}" alt="img responsive">
                      </div>
                      <div class="img-slide">
                        <div class="panel panel-default text-center">        
                          <div id="links">
                            @foreach($data->detail_img as $row)
                              <a href="{!!url('uploads/products/details/'.$row->images_url)!!}" title="{!!$data->name!!}" data-gallery>
                                  <img src="{!!url('public/uploads/products/details/'.$row->images_url)!!}" alt="{!!$data->name!!}" width="30" height="40">
                              </a>
                            @endforeach                              
                          </div>
                            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <!-- The container for the modal slides -->
                                <div class="slides"></div>
                                <!-- Controls for the borderless lightbox -->
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                                <div class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body next"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left prev">
                                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                                    Previous
                                                </button>
                                                <button type="button" class="btn btn-primary next">
                                                    Next
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                          </div>                       
                        </div>                     
                      <label class="btn btn-large btn-block btn-warning">{!!number_format($data->price)!!} vnd</label>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                      <div class="panel panel-info" style="margin: 0;">
                        <div class="panel-heading" style="padding:5px;">
                          <h3 class="panel-title">Khuyễn mãi - Chính sách</h3>
                        </div>
                        <div class="panel-body">
                          <div class="khuyenmai">
                            @if ($data->promo1!='')
                              <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo1!!}</li>
                            @elseif($data->promo2!='')
                              <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo2!!}</li>
                            @elseif ($data->promo3!='')
                              <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo3!!}</li>
                            @endif 
                              <li><span class="glyphicon glyphicon-ok-sign"></span>Cài đặt phần miềm, tải nhạc - ứng dụng miến phí</li>                                                       
                          </div>                         
                        </div>
                      </div>
                      <div class="panel panel-info">
                        <div class="panel-body">
                         <div class="chinhsach">
                            <li><span class="glyphicon glyphicon-hand-right"></span> Trong hộp có: {!!$data->packet!!} </li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> Bảo hành chính hãng: thân máy 12 tháng, pin 12 tháng, sạc 12 tháng</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> Giao hàng tận nơi miễn phí trong 1 ngày</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> 1 đổi 1 trong 1 tháng với sản phẩm lỗi</li>
                         </div>
                        </div>
                      </div>
                      @if($data->status ==1)
                        <a href="{!!url('gio-hang/addcart/'.$data->id)!!}" title="" class="btn btn-large btn-block btn-primary" style="font-size: 20px;">Đặt hàng ngay</a>
                      @else
                        <a href="" title="" class="btn btn-large btn-block btn-primary disabled" style="font-size: 20px;">Tạm hết hàng</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th colspan="2">CẤU HÌNH CHI TIẾT SẢN PHẨM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Màn hình</td>
                          <td>{!!$data->pro_details->screen!!}</td>
                        </tr>
                        <tr>
                          <td>Hệ điều hành</td>
                          <td>{!!$data->pro_details->os!!}</td>
                        </tr>
                        <tr>
                          <td>Cammera trước</td>
                          <td>{!!$data->pro_details->cam1!!}</td>
                        </tr>
                        <tr>
                          <td>Cammera sau</td>
                          <td>{!!$data->pro_details->cam2!!}</td>
                        </tr>
                        <tr>
                          <td>CPU</td>
                          <td>{!!$data->pro_details->cpu!!}</td>
                        </tr>
                        <tr>
                          <td>RAM</td>
                          <td>{!!$data->pro_details->ram!!}</td>
                        </tr>
                        <tr>
                          <td>Bộ nhớ trong</td>
                          <td>{!!$data->pro_details->storage!!}</td>
                        </tr>
                        <tr>
                          <td>Hỗ trợ thẻ nhớ</td>
                          <td>{!!$data->pro_details->exten_memmory!!}</td>
                        </tr>
                        <tr>
                          <td>Thẻ SIM</td>
                          <td>{!!$data->pro_details->sim!!}</td>
                        </tr>
                        <tr>
                          <td>Dung lượng PIN</td>
                          <td>{!!$data->pro_details->pin!!}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="table-responsive">
                    <div class="panel panel-default">        
                      <div class="panel-heading"> 
                        <small> Hình ảnh thực tế (click để xem kích thước đầy đủ)</small>
                      </div>
                      <div id="links">
                        @foreach($data->detail_img as $row)
                          <a href="{!!url('uploads/products/details/'.$row->images_url)!!}" title="{!!$data->name!!}" data-gallery>
                              <img src="{!!url('public/uploads/products/details/'.$row->images_url)!!}" alt="{!!$data->name!!}"  width="25%" height="120">
                          </a>
                        @endforeach                          
                      </div>
                        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                        <div id="blueimp-gallery" class="blueimp-gallery">
                            <!-- The container for the modal slides -->
                            <div class="slides"></div>
                            <!-- Controls for the borderless lightbox -->
                            <h3 class="title"></h3>
                            <a class="prev">‹</a>
                            <a class="next">›</a>
                            <a class="close">×</a>
                            <a class="play-pause"></a>
                            <ol class="indicator"></ol>
                            <!-- The modal dialog, which will be used to wrap the lightbox content -->
                            <div class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body next"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left prev">
                                                <i class="glyphicon glyphicon-chevron-left"></i>
                                                Previous
                                            </button>
                                            <button type="button" class="btn btn-primary next">
                                                Next
                                                <i class="glyphicon glyphicon-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                  <h2> <small> Đánh giá chi tiết sản phẩm</small></h2>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <p class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        {!!$data->r_intro!!}
                      </p>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">                        
                          {!!$data->review!!}
                      </div>
                    </div>
                    <button class="SeeMore btn-primary" data-toggle="collapse" href="#collapseTwo"><b class="caret"></b> Xem chi tiết</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <hr>
                <h2 style="padding-left: 20px;"><small>Tin tức mới</small></h2>
                <hr>
                @include('modules.khuyenmai')  
              </div><!-- /row -->

            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">            
      <!-- panel inffo 1 -->
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Sản phẩm tương tự</h3>
        </div>
        <div class="panel-body no-padding">
        <?php 
          $giaynam = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('category.parent_id','=','1')
                ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
                ->orderBy('products.created_at', 'desc')
                ->paginate(2); 

        ?>
        @foreach($giaynam as $row)
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
            <div class="thumbnail mobile">              
              <div class="bt">
                <div class="image-m pull-left">
                  <img class="img-responsive" src="{!!url('public/uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}">
                </div>
                <div class="intro pull-right">
                  <h1><small class="title-mobile">{!!$row->name!!}</small></h1>
                  <li>{!!$row->intro!!}</li>
                  <span class="label label-info">Khuyễn mãi</span>   
                  @if ($row->promo1!='')
                    <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo1!!}</li>
                  @elseif($row->promo2!='')
                    <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo2!!}</li>
                  @elseif ($row->promo3!='')
                    <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo3!!}</li>
                  @endif 
                    <li><span class="glyphicon glyphicon-ok-sign"></span>Cài đặt phần miềm, tải nhạc - ứng dụng miến phí</li> 
                </div><!-- /div introl -->
              </div> <!-- /div bt -->
              <div class="ct">
                <a href="{!!url('giaynam/'.$row->id.'-'.$row->slug)!!}" title="Chi tiết">
                  <span class="label label-info">Ưu đãi khi mua</span>   
                  @if ($row->promo1!='')
                    <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo1!!}</li>
                  @elseif($row->promo2!='')
                    <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo2!!}</li>
                  @elseif ($row->promo3!='')
                    <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$row->promo3!!}</li>
                  @endif 
                    <li><span class="glyphicon glyphicon-ok-sign"></span>Cài đặt phần miềm, tải nhạc - ứng dụng miến phí</li> 
                  <span class="label label-warning">Cấu Hình Nổi bật</span> 
                  <li><strong>CPU</strong> : <i>  {!!$row->cpu!!}</i></li>
                  <li><strong>Màn Hình</strong> : <i>{!!$row->screen!!} </i></li> 
                  <li><strong>Camera</strong> : Trước  <i>{!!$row->cam1!!}</i> Sau <i>{!!$row->cam2!!}</i></li> 
                  <li><strong>HĐH</strong> :<i> {!!$row->os!!} </i> <strong> Bộ nhớ trong</strong> :<i> {!!$row->storage!!} </i></li> 
                  <li><strong>Pin</strong> :<i> {!!$row->pin!!}</i></li>
                </a>
              </div>
                <span class="btn label-warning"><strong>{!!number_format($row->price)!!}</strong>Vnd </span>
                <a href="{!!url('gio-hang/addcart/'.$row->id)!!}" class="btn btn-success pull-right add">Thêm vào giỏ </a>
            </div> <!-- / div thumbnail -->
          </div>  <!-- /div col-4 -->
        @endforeach        

        </div>
      </div> <!-- /panel info 2  quản cáo 1          -->
      
    <!-- panel info 2  quản cáo 1          -->          
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Sự kiện HOT</h3>
      </div>
      <div class="panel-body no-padding">
      <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner1.jpg')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner2.jpg')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner3.jpg')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner4.jpg')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner5.jpg')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner6.jpg')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner7.jpg')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner8.jpg')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner9.jpg')!!}" alt="" width="100%" height="100%"> </a>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/banner10.jpg')!!}" alt="" width="100%" height="100%"> </a>
      </div>
    </div> <!-- /panel info 2  quản cáo 1          -->        
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Thống kê</h3>
      </div>
      <div class="panel-body">
        <p>Số bài viết: 124556</p>
        <p>Số Thành Viên : 12435</p>
        <p>Số Thành Viên Online: 2435</p>
        <p>Số Người Đang Xem : 435</p>
      </div>
    </div>
     <!-- /panel info 2  quản cáo 1          -->  
     <!-- fan pages myweb -->
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Fans Pages</h3>
      </div>
      <div class="panel-body">
        Hãy <a href="#" title="">Like</a> facebook của MyWeb để cập nhật tin mới nhất
      </div>
    </div> <!-- /fan pages myweb -->        
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection
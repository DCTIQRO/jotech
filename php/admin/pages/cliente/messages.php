<!-- Tabs Heading -->
<div class="widget-head bg-background text-center">
    <ul>
        <li>
            <a class="glyphicons lock" href="?page=user"> <i></i>Account Details </a>
        </li>
        <li>
            <a class="glyphicons clock" href="?page=user&amp;section=projects"> <i></i>Projects &amp; Tasks </a>
        </li>
        <li class="active">
            <a class="glyphicons envelope" href="?page=user&amp;section=messages"> <i></i>Messages </a>
        </li>
        <li>
            <a class="glyphicons share_alt" href="?page=user&amp;section=history"> <i></i>History Log </a>
        </li>
        <li>
            <a class="glyphicons lock" href="?page=cliente&amp;section=nuevo_proyecto&id=<?php echo $_GET['id']; ?>"> <i></i>Nuevo Proyecto</a>
    </ul>
</div>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <a class="btn btn-success pull-right"><i class="fa fa-pencil fa-fw"></i> Write Message</a>
    <h4>
        Messages
    </h4>
    <div class="separator"></div>
    <!-- MESSAGES START -->
    <div class="row row-merge bg-white">
        <div class="col-lg-4 col-md-6" id="email_list">
            <div class="col-table">
                <div class="input-group border-bottom bg-gray">
                    <span class="input-group-btn">
                        <a href="" class="btn"><i class="fa fa-search text-muted"></i></a>
                    </span>
                    <input type="text" class="form-control border-none rounded-none" placeholder="Search">
                </div>
                <div class="col-table-row">
                    <div class="col-app col-unscrollable">
                        <div class="col-app">
                            <div class="list-group email-item-list">
                                <a href="#" class="list-group-item padding-none">
                                    <span class="innerTB display-block">
                                        <span class="media">
                                            <span class="pull-left text-center innerLR innerT display-block half"> <i class="fa fa-fw fa-heart text-muted"></i> </span>
                                            <span class="media-body display-block innerR">
                                                <span class="media display-block innerB">
                                                    <img src="../assets/images/people/80/1.jpg" alt="" width="40" class="pull-left" />
                                                    <span class="media-body display-block">
                                                        <small class="text-muted pull-right">30 Oct</small>
                                                        <span class="h5 text-muted-dark text-weight-normal">Perpetua Inger</span>
                                                        <br/>
                                                        <span class="h4">You Won't Believe This ..</span> 
                                                        <!-- <i class="fa fa-flag text-primary"></i> -->
                                                    </span>
                                                    <span class="clearfix"></span> 
                                                </span>
                                                <span class="margin-none text-larger text-muted-darker">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</span> 
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item padding-none">
                                    <span class="innerTB display-block">
                                        <span class="media">
                                            <span class="pull-left text-center innerLR display-block half"> <i class="fa fa-fw fa-heart text-primary"></i> <i class="fa fa-circle-o text-info display-block innerT half"></i> </span>
                                            <span class="media-body display-block innerR">
                                                <span class="media display-block innerB">
                                                    <img src="../assets/images/people/80/2.jpg" alt="" width="40" class="pull-left" />
                                                    <span class="media-body display-block">
                                                        <small class="text-muted pull-right">29 Oct</small>
                                                        <span class="h5 text-muted-dark text-weight-normal">Zoticus Axel</span>
                                                        <br/>
                                                        <span class="h4">Nobody needs a new TV anymore</span> 
                                                        <!-- <i class="fa fa-flag text-primary"></i> -->
                                                    </span>
                                                    <span class="clearfix"></span> 
                                                </span>
                                                <span class="margin-none text-larger text-muted-darker">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</span> 
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item a padding-none">
                                    <span class="innerTB display-block">
                                        <span class="media">
                                            <span class="pull-left text-center innerLR display-block half">
                                                <i class="fa fa-fw fa-heart text-muted"></i> 
                                                <span class="display-block">
                                                    <span class="strong text-muted"><i class="fa fa-paperclip"></i> 2</span>
                                                </span>
                                                <span class="display-block innerT"> <i class="fa fa-circle-o text-success"></i> </span>
                                            </span>
                                            <span class="media-body display-block innerR">
                                                <span class="media display-block innerB">
                                                    <img src="../assets/images/people/80/3.jpg" alt="" width="40" class="pull-left" />
                                                    <span class="media-body display-block">
                                                        <small class="text-muted pull-right">28 Oct</small>
                                                        <span class="h5 text-muted-dark text-weight-normal">Yun Ragna &amp; Me &nbsp; <span class="text-weight-regular">(2)</span></span>
                                                        <br/>
                                                        <span class="h4">Web Application Inquiry</span> 
                                                        <!-- <i class="fa fa-flag text-primary"></i> -->
                                                    </span>
                                                    <span class="clearfix"></span> 
                                                </span>
                                                <span class="margin-none text-larger text-muted-darker">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</span> 
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item padding-none">
                                    <span class="innerTB display-block">
                                        <span class="media">
                                            <span class="pull-left text-center innerLR display-block half"> <i class="fa fa-fw fa-heart text-muted"></i> <i class="fa fa-circle-o text-primary display-block innerT half"></i> </span>
                                            <span class="media-body display-block innerR">
                                                <span class="media display-block innerB">
                                                    <img src="../assets/images/people/80/4.jpg" alt="" width="40" class="pull-left" />
                                                    <span class="media-body display-block">
                                                        <small class="text-muted pull-right">27 Oct</small>
                                                        <span class="h5 text-muted-dark text-weight-normal">Victor Tacitus</span>
                                                        <br/>
                                                        <span class="h4">Introduction to animation in Maya</span> 
                                                        <!-- <i class="fa fa-flag text-primary"></i> -->
                                                    </span>
                                                    <span class="clearfix"></span> 
                                                </span>
                                                <span class="margin-none text-larger text-muted-darker">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</span> 
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item padding-none">
                                    <span class="innerTB display-block">
                                        <span class="media">
                                            <span class="pull-left text-center innerLR innerT display-block half"> <i class="fa fa-fw fa-heart text-muted"></i> </span>
                                            <span class="media-body display-block innerR">
                                                <span class="media display-block innerB">
                                                    <img src="../assets/images/people/80/5.jpg" alt="" width="40" class="pull-left" />
                                                    <span class="media-body display-block">
                                                        <small class="text-muted pull-right">26 Oct</small>
                                                        <span class="h5 text-muted-dark text-weight-normal">Arden Catharine</span>
                                                        <br/>
                                                        <span class="h4">Don't Fly A Plane Through Ash</span> 
                                                        <!-- <i class="fa fa-flag text-primary"></i> -->
                                                    </span>
                                                    <span class="clearfix"></span> 
                                                </span>
                                                <span class="margin-none text-larger text-muted-darker">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero</span> 
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <!-- // END list-group -->
                        </div>
                        <!-- // END col-app -->
                    </div>
                    <!-- // END col-app -->
                </div>
                <!-- // END col-table-row -->
            </div>
            <!-- // END col-table -->
            <!-- // END col-separator -->
        </div>
        <!-- // END col -->
        <div class="col-lg-8 col-md-6 hidden-sm hidden-xs " id="email_details">
            <div class="col-table bg-white">
                <div class="innerAll border-bottom bg-gray text-center">
                    <div class="btn-group btn-group-sm">
                        <a href="#" class="btn btn-default"><i class="fa fa-reply"></i></a>
                        <a href="#" class="btn btn-default"><i class="fa fa-forward"></i></a>
                        <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                    </div>
                    <button class="btn btn-sm btn-inverse" id="close-email-details"><i class="fa fa-fw fa-times"></i></button>
                </div>
                <div class="col-table-row">
                    <div class="col-app col-unscrollable">
                        <div class="col-app">
                            <div class="innerAll border-bottom">
                                <div class="media innerB">
                                    <img src="../assets/images/people/80/8.jpg" alt="" width="50" class="pull-left" />
                                    <div class="media-body innerT half">
                                        <small class="text-muted pull-right">28 October 2013</small>
                                        <h5 class="text-muted-darker">
                                            MosaicPro <span class="text-weight-regular">(Me)</span>
                                        </h5>
                                        <h5 class="text-muted-dark text-weight-normal">
                                            To: Yun Ragna
                                        </h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <h4 class="margin-none">
                                    <i class="fa fa-fw fa-circle-o text-success"></i> RE: Web Application Inquiry
                                </h4>
                            </div>
                            <div class="innerAll">
                                <div class="innerAll">
                                    <p>Hi Yun,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero corporis ipsam voluptatibus suscipit eos expedita sapiente omnis voluptatum ea! Culpa, vitae eaque quis modi voluptatum quisquam ullam. Modi, tempora!</p>
                                    <p class="text-muted margin-none">
                                        Regards,
                                        <br/>
                                        mosaicpro 
                                        <br/>
                                        Director @ mosaicpro.biz
                                        <br/>
                                        www.mosaicpro.biz
                                    </p>
                                </div>
                            </div>
                            <div class="innerAll border-top">
                                <p class="margin-none innerAll text-muted-dark"><i class="fa fa-quote-left fa-4x pull-left"></i> Aliquam rutrum, sem at scelerisque tempor, nulla diam pulvinar tortor, id pulvinar massa velit eu purus. Curabitur eu fringilla diam, sed suscipit lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras iaculis enim vel odio imperdiet faucibus. Aliquam erat volutpat.</p>
                            </div>
                            <div class="innerAll bg-gray border-top">
                                <div class="media inline-block margin-none">
                                    <div class="innerLR">
                                        <i class="fa fa-paperclip pull-left fa-2x"></i> 
                                        <div class="media-body">
                                            <div><a href="" class="strong text-regular">Project.zip</a></div>
                                            <span>15 MB</span> 
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="media inline-block margin-none">
                                    <div class="innerLR border-left">
                                        <i class="fa fa-file pull-left fa-2x"></i> 
                                        <div class="media-body">
                                            <div><a href="" class="strong text-regular">Contract.pdf</a></div>
                                            <span>244 KB</span> 
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-separator-h box"></div>
                            <div class="innerAll border-bottom">
                                <div class="media innerB">
                                    <img src="../assets/images/people/80/3.jpg" alt="" width="50" class="pull-left" />
                                    <div class="media-body innerT half">
                                        <small class="text-muted pull-right">28 October 2013</small>
                                        <h5 class="text-muted-darker">
                                            Yun Ragna <span class="text-weight-regular">(yun@mail.com)</span>
                                        </h5>
                                        <h5 class="text-muted-dark text-weight-normal">
                                            To: MosaicPro
                                        </h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <h4 class="margin-none">
                                    <i class="fa fa-fw fa-circle-o text-success"></i> Web Application Inquiry
                                </h4>
                            </div>
                            <div class="innerAll">
                                <div class="innerAll">
                                    <p>Hi Adrian,</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, libero corporis ipsam voluptatibus suscipit eos expedita sapiente omnis voluptatum ea! Culpa, vitae eaque quis modi voluptatum quisquam ullam. Modi, tempora!</p>
                                    <p class="text-muted margin-none">
                                        Yun Ragna 
                                        <br/>
                                        Marketing Manager @ company.biz
                                        <br/>
                                        www.company.biz
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col 2 -->
    </div>
    <!-- // END MESSAGES -->
    <div class="clearfix"></div>
</div>
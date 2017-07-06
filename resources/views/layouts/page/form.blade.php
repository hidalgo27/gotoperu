<div class="container">
    <div class="row margin-top-40" id="cd-inquire">
        <div class="col-md-12">
            <div class="text-center font-montserrat">
                <h2>Create Your Dream Adventure</h2>
                <h3>We have it all. Just ask!</h3>
                {{--<p>Paquetes turisticos para todo tipo de ocaciones</p>--}}
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <section>
                <div class="wizard">
                    <div class="wizard-inner hide">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role="form" id="f_form">
                        {{csrf_field()}}
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center font-montserrat">
                                            <h4>HOTEL QUALITY</h4>
                                            {{--<p>Paquetes turisticos para todo tipo de ocaciones</p>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-design">
                                                <div class="col-lg-2 hidden-xs">
                                                    <div class="row">
                                                        <div class="content-icon col-md-12">
                                                            <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-xs-3 no-padding">
                                                            <div data-toggle="buttons" class="btn-group">
                                                                <label class="btn btn-default">
                                                                    <div class="design-content">
                                                                        <input type="checkbox" name="category[]" value="Luxury">
                                                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                        <span class="text-19 text-xs-12"><b>Luxury</b></span>
                                                                        <span class="color-goto-orange">★★★★★</span>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 no-padding">
                                                            <div data-toggle="buttons" class="btn-group">
                                                                <label class="btn btn-default">
                                                                    <div class="design-content">
                                                                        <input type="checkbox" name="category[]" value="Superior">
                                                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                        <span class="text-19 text-xs-12"><b>Superior</b></span>
                                                                        <span class="color-goto-orange">★★★★</span>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 no-padding">
                                                            <div data-toggle="buttons" class="btn-group">
                                                                <label class="btn btn-default">
                                                                    <div class="design-content">
                                                                        <input type="checkbox" name="category[]" value="Best Value">
                                                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                        <span class="text-19 text-xs-12"><b>Best Value</b></span>
                                                                        <span class="color-goto-orange">★★★</span>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 no-padding">
                                                            <div data-toggle="buttons" class="btn-group">
                                                                <label class="btn btn-default">
                                                                    <div class="design-content">
                                                                        <input type="checkbox" name="category[]" value="Budget">
                                                                        <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                        <span class="text-19 text-xs-12"><b>Budget</b></span>
                                                                        <span class="color-goto-orange">★★</span>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row margin-top-10">
                                    <div class="col-md-12">
                                        <div class="text-center font-montserrat">
                                            <h4>NUMBER OF TRAVELERS</h4>
                                            {{--<p>Paquetes turisticos para todo tipo de ocaciones</p>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="">
                                            <div class="form-group">
                                                <div class="form-design">
                                                    <div class="col-lg-2 hidden-xs">
                                                        <div class="row">
                                                            <div class="content-icon col-md-12">
                                                                <i class="fa fa-male fa-2x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="number[]" value="1">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-33"><b>1</b></span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="number[]" value="2">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-33"><b>2</b></span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="number[]" value="3">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-33"><b>3</b></span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="number[]" value="4">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-33"><b>4</b></span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="number[]" value="5+">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-33"><b>5+</b></span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="number[]" value="Undecided">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-9 padding-spacer-19"><b>Undecided</b></span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row margin-top-10">
                                    <div class="col-md-12">
                                        <div class="text-center font-montserrat">
                                            <h4>TRIP LENGTH</h4>
                                            {{--<p>Paquetes turisticos para todo tipo de ocaciones</p>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="">
                                            <div class="form-group">
                                                <div class="form-design">
                                                    <div class="col-lg-2 hidden-xs">
                                                        <div class="row">
                                                            <div class="content-icon col-md-12">
                                                                <i class="fa fa-suitcase fa-2x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="days[]" value="3 a 5">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-19 text-xs-12"><b>3-5</b></span>
                                                                                <span class="color-goto-orange text-xs-12">Days</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="days[]" value="6 a 8">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-19 text-xs-12"><b>6-8</b></span>
                                                                                <span class="color-goto-orange text-xs-12">Days</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="days[]" value="9 a 11">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-19 text-xs-12"><b>9-11</b></span>
                                                                                <span class="color-goto-orange text-xs-12">Days</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="days[]" value="12 a 15">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-19 text-xs-12"><b>12-15</b></span>
                                                                                <span class="color-goto-orange text-xs-12">Days</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="days[]" value="16+">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-19 text-xs-12"><b>16+</b></span>
                                                                                <span class="color-goto-orange text-xs-12">Days</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-xs-2 no-padding">
                                                                <div class="">
                                                                    <div data-toggle="buttons" class="btn-group">
                                                                        <label class="btn btn-default">
                                                                            <div class="design-content">
                                                                                <input type="checkbox" name="days[]" value="Undecided">
                                                                                <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                                <span class="text-9 text-xs-9 padding-spacer-19 padding-spacer-xs-11"><b>Undecided</b></span>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row margin-top-10">
                                    <div class="col-md-12">

                                        <div class="">
                                            <div class="form-group">
                                                <div class="form-design">
                                                    <div class="col-lg-2 hidden-xs">
                                                        <div class="row">
                                                            <div class="content-icon col-md-12">
                                                                <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 no-padding col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xs-12">
                                                                <div class="">
                                                                    <div class="design-content">
                                                                        <input type="date" name="" id="f_date" value="" placeholder="Tentative or set departure dates" size="45">
                                                                    </div>
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
                                    <div class="col-md-12">
                                        <ul class="list-inline pull-right margin-top-20">
                                            <li class="no-padding"><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="row margin-top-10">
                                    <div class="col-md-12">

                                        <div class="">
                                            <div class="form-group">
                                                <div class="form-design">
                                                    <div class="col-lg-2 hidden-xs">
                                                        <div class="row">
                                                            <div class="content-icon col-md-12">
                                                                <i class="fa fa-edit fa-2x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-xs-12 no-padding">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="">
                                                                    <div class="design-content">
                                                                        <textarea name="" id="f_description" rows="1" placeholder="What can we do for you? We have it all. Just ask!"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row margin-top-10">
                                    <div class="col-md-12">

                                        <div class="">
                                            <div class="form-group">
                                                <div class="form-design">
                                                    <div class="col-lg-2 hidden-xs">
                                                        <div class="row">
                                                            <div class="content-icon col-md-12">
                                                                <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-12 no-padding">
                                                                <div class="">
                                                                    <div class="design-content">
                                                                        <input type="text" name="f_name" id="f_name" placeholder=" Name (Required)" size="45">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row margin-top-10">
                                    <div class="col-md-12">

                                        <div class="">
                                            <div class="form-group">
                                                <div class="form-design">
                                                    <div class="col-lg-2 hidden-xs">
                                                        <div class="row">
                                                            <div class="content-icon col-md-12">
                                                                <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-12 no-padding">
                                                                <div class="">
                                                                    <div class="design-content">
                                                                        <input type="email" name="f_email" id="f_email" placeholder=" Email (Required)" size="45">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row margin-top-10">
                                    <div class="col-md-12">

                                        <div class="">
                                            <div class="form-group">
                                                <div class="form-design">
                                                    <div class="col-lg-2 hidden-xs">
                                                        <div class="row">
                                                            <div class="content-icon col-md-12">
                                                                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-lg-12 no-padding">
                                                                <div class="">
                                                                    <div class="design-content">
                                                                        <input type="tel" name="f_phone" id="f_phone" value="" placeholder=" Phone" size="45">
                                                                    </div>
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
                                    <div class="col-md-12">
                                        <div class="margin-top-20">
                                            {{--<a href="#cd-inquire" id="step1-link" class="btn btn-lg btn-default hide">Skip <span style="display: none;">Previous</span></a>--}}
                                            {{--<span class="pull-right text-27 padding-left-20"> <b>1/2</b></span>--}}
                                            {{--<a href="#" id="step2-link" class="btn btn-lg btn-success pull-right">Next</a>--}}
                                            {{--<input type="submit" value="sdsd">--}}
                                            <button type="button" class="btn btn-default prev-step">Previous</button>
                                            <button class="btn btn-info pull-right" id="f_send" type="button" onclick="sendDesign()">Submit
                                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                            </button>
                                            <div class="loader pull-right hide" id="loader">Loading...</div>
                                            <i class="fa fa-check pull-right fa-3x color-goto-orange hidden" aria-hidden="true" id="f_check"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 margin-top-30 hide" id="f_congratulation">
                    <div class="alert alert-dismissible show custom-alert info-alert" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p><strong><i class="fa fa-thumbs-up"></i> <b></b></strong></p>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="padding-5 text-15">
                        <a href="mailto:info@gotoperu.com">info@gotoperu.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
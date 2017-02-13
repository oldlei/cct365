@extends('admin.app')

@section('css')
<!-- Bootstrap -->
<link href="{{asset('/backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{asset('/backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- NProgress -->
<link href="{{asset('/backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{asset('/backend/css/custom.min.css')}}" rel="stylesheet">
<link href="{{asset('/backend/vendors/nestable/nestable.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="col-md-6 col-sm-12 col-xs-12">
	<div class="x_panel">
			<div class="x_content">

					<!--*******************************-->
					<menu id="nestable-menu">
							<button type="button" data-action="expand-all">Expand All</button>
							<button type="button" data-action="collapse-all">Collapse All</button>
					</menu>
					<div class="dd" id="nestable">
							<ol class="dd-list">
									<li class="dd-item" data-id="1">
											<div class="dd-handle">Item 111 <a style="float:right" href="#">11</a></div>
									</li>
									<li class="dd-item" data-id="2">
											<div class="dd-handle">Item 2</div>
											<ol class="dd-list">
													<li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
													<li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
													<li class="dd-item" data-id="5">
															<div class="dd-handle">Item 5</div>
															<ol class="dd-list">
																	<li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
																	<li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
																	<li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
															</ol>
													</li>
													<li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
													<li class="dd-item" data-id="10"><div class="dd-handle">Item 10</div></li>
											</ol>
									</li>
									<li class="dd-item" data-id="11">
											<div class="dd-handle">Item 11</div>
									</li>
									<li class="dd-item" data-id="12">
											<div class="dd-handle">Item 12</div>
									</li>
							</ol>
					</div>

					<!--**********************************-->
			</div>
	</div>
</div>
<div class="col-md-6 col-sm-12 col-xs-12">
	<div class="x_panel">
			<div class="x_content">

			</div>
	</div>
</div>


<textarea id="nestable-output"></textarea>

<p>&nbsp;</p>

<div class="cf nestable-lists">



</div>

<p class="small">Copyright &copy; <a href="http://dbushell.com/">David Bushell</a> | Made for <a href="http://www.browserlondon.com/">Browser</a></p>

@endsection

@section('js')
<!-- jQuery -->
<script src="{{asset('/backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/backend/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('/backend/vendors/nprogress/nprogress.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('/backend/js/custom.min.js')}}"></script>
<script src="{{asset('/backend/vendors/nestable/jquery.nestable.js')}}"></script>
<script>

$(document).ready(function()
{

    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })
    .on('change', updateOutput);


    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));

    $('#nestable-menu').on('click', function(e)
    {
			alert('123');
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });


});
</script>
@endsection

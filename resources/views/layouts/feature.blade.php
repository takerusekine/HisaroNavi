<section>
	<div class="container">
		<div class="row">
			{{-- <div class="col-xs-12"> --}}
			<div class="col-xs-12">
				<h2>特集から探す</h2>
			</div>
		</div>
			<div class="row">
				<div class="list-group">
					{!! Form::open(['method' => 'get', 'action' => 'FeatureController@getReasonable', 'class' => 'list-group-item']) !!}
					<input type="hidden" name="area_flash" value="">
					<button type="submit" class="btn-block">
						<img src="{{asset('img/feature-icon01.svg')}}" alt="格安サロンアイコン" width="20"/>
						格安サロン
						<i class="material-icons pull-xs-right">keyboard_arrow_right</i></button>
					{!! Form::close() !!}

					{!! Form::open(['method' => 'get', 'action' => 'FeatureController@getFirstDiscount', 'class' => 'list-group-item']) !!}
					<input type="hidden" name="area_flash" value="">
					<button type="submit" class="btn-block">
						<img src="{{asset('img/feature-icon02.svg')}}" alt="格安サロンアイコン" width="20"/>
						初回割引あり<i class="material-icons pull-xs-right">keyboard_arrow_right</i></button>
					{!! Form::close() !!}

					{!! Form::open(['method' => 'get', 'action' => 'FeatureController@getStudentDiscount', 'class' => 'list-group-item']) !!}
					<input type="hidden" name="area_flash" value="">
					<button type="submit" class="btn-block">
						<img src="{{asset('img/feature-icon03.svg')}}" alt="格安サロンアイコン" width="20"/>
						学割あり<i class="material-icons pull-xs-right">keyboard_arrow_right</i></button>
					{!! Form::close() !!}

					{!! Form::open(['method' => 'get', 'action' => 'FeatureController@getMidnight', 'class' => 'list-group-item']) !!}
					<input type="hidden" name="area_flash" value="">
					<button type="submit" class="btn-block">
						<img src="{{asset('img/feature-icon04.svg')}}" alt="格安サロンアイコン" width="20"/>
						深夜まで営業<i class="material-icons pull-xs-right">keyboard_arrow_right</i></button>
					{!! Form::close() !!}

					{!! Form::open(['method' => 'get', 'action' => 'FeatureController@getWomanDiscount', 'class' => 'list-group-item']) !!}
					<input type="hidden" name="area_flash" value="">
					<button type="submit" class="btn-block">
						<img src="{{asset('img/feature-icon05.svg')}}" alt="格安サロンアイコン" width="20"/>
						女性割引あり<i class="material-icons pull-xs-right">keyboard_arrow_right</i></button>
					{!! Form::close() !!}

					{!! Form::open(['method' => 'get', 'action' => 'FeatureController@getMachineMany', 'class' => 'list-group-item']) !!}
					<input type="hidden" name="area_flash" value="">
					<button type="submit" class="btn-block">
						<img src="{{asset('img/feature-icon06.svg')}}" alt="格安サロンアイコン" width="20"/>
						マシンの種類が豊富<i class="material-icons pull-xs-right">keyboard_arrow_right</i></button>
					{!! Form::close() !!}

					{!! Form::open(['method' => 'get', 'action' => 'FeatureController@getPrepaid', 'class' => 'list-group-item']) !!}
					<input type="hidden" name="area_flash" value="">
					<button type="submit" class="btn-block">
						<img src="{{asset('img/feature-icon07.svg')}}" alt="格安サロンアイコン" width="20"/>
						お得な回数券・プリペイドあり<i class="material-icons pull-xs-right">keyboard_arrow_right</i></button>
					{!! Form::close() !!}
				</div>
			{{-- </div> --}}
		</div>
	</div>
</section>

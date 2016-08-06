<section id="feature">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>特集から探す</h2>
			</div>
		</div>
			<div class="row">
				<div class="list-group">
					<a href="{{action('FeatureController@getReasonable')}}" class="list-group-item">
						<img src="{{asset('img/feature-icon01.svg')}}" alt="格安サロンアイコン" width="20"/>
						<span>格安サロン</span>
						<i class="material-icons pull-xs-right">keyboard_arrow_right</i>
					</a>
					<a href="{{action('FeatureController@getFirstDiscount')}}" class="list-group-item">
						<img src="{{asset('img/feature-icon02.svg')}}" alt="格安サロンアイコン" width="20"/>
						<span>初回割引あり</span><i class="material-icons pull-xs-right">keyboard_arrow_right</i>
					</a>
					<a href="{{action('FeatureController@getStudentDiscount')}}" class="list-group-item">
						<img src="{{asset('img/feature-icon03.svg')}}" alt="格安サロンアイコン" width="20"/>
						<span>学割あり</span><i class="material-icons pull-xs-right">keyboard_arrow_right</i>
					</a>
					<a href="{{action('FeatureController@getMidnight')}}" class="list-group-item">
						<img src="{{asset('img/feature-icon04.svg')}}" alt="格安サロンアイコン" width="20"/>
						<span>深夜まで営業</span><i class="material-icons pull-xs-right">keyboard_arrow_right</i>
					</a>
					<a href="{{action('FeatureController@getWomanDiscount')}}" class="list-group-item">
						<img src="{{asset('img/feature-icon05.svg')}}" alt="格安サロンアイコン" width="20"/>
						<span>女性割引あり</span><i class="material-icons pull-xs-right">keyboard_arrow_right</i>
					</a>
					<a href="{{action('FeatureController@getMachineMany')}}" class="list-group-item">
						<img src="{{asset('img/feature-icon06.svg')}}" alt="格安サロンアイコン" width="20"/>
						<span>マシンの種類が豊富</span><i class="material-icons pull-xs-right">keyboard_arrow_right</i>
					</a>
					<a href="{{action('FeatureController@getPrepaid')}}" class="list-group-item">
						<img src="{{asset('img/feature-icon07.svg')}}" alt="格安サロンアイコン" width="20"/>
						<span>お得な回数券・プリペイドあり</span><i class="material-icons pull-xs-right">keyboard_arrow_right</i>
					</a>
				</div>
		</div>
	</div>
</section>

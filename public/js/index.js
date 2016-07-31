var renderer, map, mapInitWidth = 651, mapInitHeight = 571,
    mouse, onMouseAreaName, areaNum = area.length;

window.addEventListener( 'load', init, false );



function init(){
  
  //　Canvas
  map = document.createElement( 'canvas' );
  if( mapInitHeight / mapInitWidth < window.innerHeight / window.innerWidth ){
    map.width = window.innerWidth;
    map.height = mapInitHeight * window.innerWidth / mapInitWidth;
  }else{
    map.width = mapInitWidth * window.innerHeight / mapInitHeight;
    map.height = window.innerHeight;
  }
  document.getElementById( 'container' ).appendChild( map );
  renderer = map.getContext( '2d' );
  
  // 描画
  render();
  
  
  map.addEventListener( 'mousemove', function( event ){
    mouse = { x : event.clientX - map.offsetLeft, y : event.clientY - map.offsetTop };
    render();
  }, false );

  map.addEventListener( 'mouseout', function(){
    mouse = null;
    render();
  }, false );

  map.addEventListener( 'mousedown', function(){
    if( onMouseAreaName != '' ) alert( onMouseAreaName );
  }, false );
}

/*
 * 描画
 */
function render(){
  
  // Canvasクリア
  renderer.clearRect( 0, 0, map.width, map.height );
  
  onMouseAreaName = '';
  
  for( var i = 0; i < areaNum; i++ ){
    var coords = area[i].coords;
    var idx = 0;
    
    // エリアのパスを描く
    renderer.beginPath();
    while( true ){
      var x = coords[idx * 2];
      var y = coords[idx * 2 + 1];
      if( x == undefined || y == undefined ) break;
      if( 0 < idx ){
        renderer.lineTo( x * map.width / mapInitWidth, y * map.height / mapInitHeight );
      }else{
        renderer.moveTo( x * map.width / mapInitWidth, y * map.height / mapInitHeight );
      }
      idx++;
    }
    renderer.closePath();

    // マウスがパスの内側にある
    if( mouse != null && onMouseAreaName == '' && renderer.isPointInPath( mouse.x, mouse.y ) ) {
      renderer.fillStyle = "#660000";
      onMouseAreaName = area[i].name;
    // 外側にある
    }else{
      renderer.fillStyle = "#666666";
    }
    
    renderer.fill();
  }

  map.style.cursor = ( onMouseAreaName == '' ) ? 'default' : 'pointer';
}

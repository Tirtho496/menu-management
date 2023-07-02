<div class="border-end bg-dark" id="sidebar-wrapper">
    <div class="list-group list-group-flush bg-dark">
        @foreach($menus as $item)
          <a class="list-group-item list-group-item-action list-group-item-dark p-3" href="{{url('menu/'.$item->id)}}">{{$item->name}}</a>   
        @endforeach
    </div>
  </div>
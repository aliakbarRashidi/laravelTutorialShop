<form method="post" action="{{ url('admin/category/store') }}">
  {{ csrf_field() }}
  <input type="text" name="name">
  <input type="text" name="email">
  <input type="submit">
</from>

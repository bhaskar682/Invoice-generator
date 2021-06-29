<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<select id="select">
  <option value="1">1</option>
  <option value="1">2</option>
  <option value="1">3</option>
</select>
<script>
  $(".select").on('change', function(){
  var parent = $(this).closest('tr');
  console.log(parent);
});
</script>
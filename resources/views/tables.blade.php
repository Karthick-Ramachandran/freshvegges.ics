@foreach($tables as $table)
    {{ $table->Tables_in_db_name }} // you need to know the name of your database in advance
@endforeach

@extends('layouts.master')

@section('content')
  <div class="container projects" >

    <div class="small-header">

      <h2 class="featurette-heading">RECENT PROJECT</h2>
      <hr class="featurette-divider">
      <h5></h5>
    </div>
      
        <table>
          @foreach ($projList as $proj)
            <tr>

              <td>
                <a href="/projList/proj/{{$proj->id}}">
                {{$proj->name}}
                </a>
              </td>

              <td>
                  <span class="small">{{$proj->platform}}</span>
              </td>

            </tr>
            @endforeach
        </table>

    </div>
  </div>
@endsection
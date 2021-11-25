@extends('layouts.app')
@section('content')

<div class="container">
<form id="frmexercicio" name="frmexercicio" action="{{ route('exercicios.update', $exercicio->id) }}" method="POST">
@csrf
@method('PUT')
<div class="form-group">
 <label for="periodo">Período</label>
 <input type="date" class="form-control" id="periodo" name="periodo" value="{{ $exercicio->periodo }}">
 </div>

 <div class="form-group">
 <label for="kmatual">KmAtual</label>
 <input type="number" class="form-control" id="kmatual" name="kmatual" value="{{ $exercicio->kmatual }}">
 </div>

 <div class="form-group">
 <label for="kmtotal">KmTotal</label>
 <input type="number" class="form-control" id="kmtotal"  name="kmtotal" value="{{ $exercicio->kmtotal }}" disabled="">
 </div>

 <div class="form-group">
 <label for="tempo">Tempo</label>
 <input type="number" class="form-control" id="tempo" name="tempo" value="{{ $exercicio->tempo }}">
 </div>

 <button type="submit" class="btn btn-primary">Adicionar</button>
 </form>

 @endsection

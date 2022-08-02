<?php 
use App\Models\Calisanlar;
?>

<div class="wrapper">
    <div class="filter">
        <div class="d-flex f-col g5">
            <label for="">Mevki</label>
            <select class="form-select" wire:model="byMevki">
                <option value="">Mevki Seç \ Hepsi</option>
                @foreach ($mevkiler as $item)
                    <option value="{{$item->mevki}}">{{$item->mevki}}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex f-col g5">
            <label for="">Yetkinlik</label>
            <select class="form-select" wire:model="byYetkinlik">
                <option value="">Yetkinlik Seç \ Hepsi</option>
                @foreach ($yetkinlik as $item)
                    <option value="{{$item->yetkinlik}}">{{$item->yetkinlik}}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex f-col g5">
            <label for="">Şehir</label>
            <select class="form-select" wire:model="bySehir">
                <option value="">Şehir Seç \ Hepsi</option>
                @foreach ($sehir as $item)
                    <option value="{{$item->yasadigi_sehir}}">{{$item->yasadigi_sehir}}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex f-col g5">
            <label for="">Yaş</label>
            <div class="minmax">
                <select class="form-select" wire:model="minAge">
                    <option value="">Minimum Yaş</option>
                    @for ($i = 18; $i < 28; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                <select class="form-select" wire:model="maxAge">
                    <option value="">Maximum Yaş</option>
                    @for ($i = 18; $i < 28; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
    
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ad</th>
            <th scope="col">Soyad</th>
            <th scope="col">Mevki</th>
            <th scope="col">Yetkinlik</th>
            <th scope="col">Yaşadığı Şehir</th>
            <th scope="col">Yaş</th>
            <th scope="col">Doğum Yılı</th>

          </tr>
        </thead>
        <tbody>
          
          @foreach ($calisanlar as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->ad}}</td>
            <td>{{$item->soyad}}</td>
            <td>{{$item->mevki}}</td>
            <td>{{$item->yetkinlik}}</td>
            <td>{{$item->yasadigi_sehir}}</td>

            <td>{{$item->yas}}</td>

            <td>{{Calisanlar::DogumYili($item)}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

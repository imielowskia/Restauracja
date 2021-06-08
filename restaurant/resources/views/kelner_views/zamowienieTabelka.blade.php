@php $zamowienie=\App\Models\Zamowienie::all();@endphp
@php $menu=\App\Models\Menu::all();@endphp
<div class="col-sm-3 ">

    <table class="table table-bordered table-dark bg-dark mt-4 ">
        <thead>
        <tr>
            <th class="text-center" colspan="3" scope="row">Zamówienie</th>
        </tr>

        </thead>
        <thead>
        <tr>
            <th scope="col">Nazwa</th>
            <th scope="col">Cena</th>
            <th scope="col">Akcja</th>
        </tr>
        </thead>
        <!--zawartosc tabeli-->
        <tbody>
        @foreach($zamowienie as $Zamowienie)
        <tr>
            <th scope="row">Produkt 1</th>
            <td>CENA</td>
            <td><button type="button" class="btn btn-danger">Usuń</button></td>
        </tr>
        @endforeach


        </tbody>
        <thead>
        <tr>
            <th scope="row">Suma</th>
            <td colspan="2">Suma</td>
        </tr>
        </thead>
    </table>
    <div class="d-flex justify-content-sm-end">
        <button type="button" class="btn btn-success">Zatwierdź</button>
        <button type="button" class="btn btn-danger ml-2">Anuluj</button></div>
</div>

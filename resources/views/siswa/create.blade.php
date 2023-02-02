@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>Tambah Data Siswa</h2>
        <form method="POST" action="/siswa/store" >
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">NIS</td>
                <td width="25%"><input type="number" name="nis"></td>
            </tr>

            <tr>
                <td width="25%">Nama</td>
                <td width="25%"><input type="text" name="nama_siswa"></td>
            </tr>

            <tr>
                <td width="25%">Jenis Kelamin</td>
                <td width=""><input type="radio" name="jk" value="L">Laki-Laki</td>
                <td width=""><input type="radio" name="jk" value="P">Perempuan</td>
            </tr>

            <tr>
                <td width="25%">Alamat</td>
                <td width=""><textarea name="alamat"></textarea></td>
            </tr>
            
            <tr>
                <td class="25%">Kelas</td>
                <td width="25%">
                    <select name="kelas_id">
                        <option selected>Pilih Kelas</option>
                        @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td width="25%">Password</td>
                <td width="25%"><input type="password" name="password"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">SIMPAN</button></center>
                </td>
            </tr>
        </table>
        </form>
    </center>
@endsection
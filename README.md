

# Sekolah API

Project demo membuat sebuah <i>RESTFUL API<i> untuk keperluan sekolah menggunakan laravel


## API Reference

#### Get semua data nilai siswa - HTTP Response Code: 200

```http
  GET api/nilai
```


```javascript
"nama": "Data Nilai Siswa",
    "data": [
        {
            "kd_nilai": 141,
            "nis": "7101-633-266",
            "kd_matpel": "KD060",
            "nilai_p": "63",
            "nilai_k": "83",
            "semester": "8",
            "tapel": "1982",
            "created_at": "2023-01-20 14:51:12",
            "updated_at": "2023-01-20 14:51:12",
            "nama_siswa": "Dr. Bruce Littel",
            "nama_matpel": "Kimia",
            "kd_kompentensi": "KD004",
            "nama_kompentensi": "RPL",
            "prog_keahlian": "Teknik Komputer dan Informatika"
        },

  }
  
```



#### Get data nilai siswa bedasarkan NIS - HTTP Response Code: 200

```http
  GET /api/nilai/${nis}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `nis`      | `string` | **Required**. No induk siswa |

```javascript
{
    "nama": "Data nilai siswa bedasarkan NIS",
    "status": "Success",
    "data": {
        "kd_nilai": 110,
        "nis": "8684-308-081",
        "kd_matpel": "KD027",
        "nilai_p": "70",
        "nilai_k": "88",
        "semester": "11",
        "tapel": "1995",
        "created_at": "2023-01-20 14:52:11",
        "updated_at": "2023-01-20 15:59:37"
    }
}
  
```

#### Post nilai siswa - HTTP Response Code: 201

```http
  POST api/nilai
```

|  | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `kd_nilai` | `string` | **Required**. kode_nilai |
| `nis` | `string` | **Required**. field dari NIS di kolom nis tabel siswa |
| `kd_matpel` | `string` | **Required**. field dari kd_matpel dari table matpel |
| `nilai_p` | `string` | **Required**. nilai pelajaran |
| `nilai_k` | `string` | **Required**. nilai pratikum |
| `semester` | `string` | **Required**. semester |
| `tapel` | `string` | **Required** tahun pelajaran  |

```javascript
{
    "nama": "Data Nilai Siswa",
    "data": {
        "nis": "7101-633-266",
        "kd_matpel": "KD060",
        "nilai_p": "90",
        "nilai_k": "75",
        "semester": "8",
        "tapel": "20162018",
        "updated_at": "2023-01-20T17:23:55.000000Z",
        "created_at": "2023-01-20T17:23:55.000000Z",
        "kd_nilai": 946
    }
}
  
```

#### Update nilai siswa bedsarkan kd_nilai - HTTP Response Code: 204

```http
  PUT api/nilai{kd_nilai}
```

|  | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `kd_nilai` | `string` | **Required**. kode_nilai |
| `nis` | `string` | **Required**. field dari NIS di kolom nis tabel siswa |
| `kd_matpel` | `string` | **Required**. field dari kd_matpel dari table matpel |
| `nilai_p` | `numeric` | **Required**. nilai pelajaran |
| `nilai_k` | `numeric` | **Required**. nilai pratikum |
| `semester` | `numeric` | **Required**. semester |
| `tapel` | `string` | **Required** tahun pelajaran  |

```javascript
{
    "status": "Data Nilai Siswa bedasarkan NIS berhasil diperharui",
    "data": {
        "kd_nilai": 110,
        "nis": "8684-308-081",
        "kd_matpel": "KD027",
        "nilai_p": "70",
        "nilai_k": "88",
        "semester": "11",
        "tapel": "1995",
        "created_at": "2023-01-20T14:52:11.000000Z",
        "updated_at": "2023-01-20T15:59:37.000000Z"
    }
}
  
```

#### Delete data nilai siswa bedasarkan kd_nilai - HTTP Response Code: 204

```http
  DELETE /api/nilai/${nis}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `kd_nilai`      | `string` | **Required**. Kode_nilai |

```javascript
{
    "status": "success",
    "message": "data nilai siswa  berhasil dihapus",
    "data": {
        "kd_nilai": 946,
        "nis": "7101-633-266",
        "kd_matpel": "KD060",
        "nilai_p": "90",
        "nilai_k": "75",
        "semester": "8",
        "tapel": "20162018",
        "created_at": "2023-01-20T17:23:55.000000Z",
        "updated_at": "2023-01-20T17:23:55.000000Z"
    }
}
  
```


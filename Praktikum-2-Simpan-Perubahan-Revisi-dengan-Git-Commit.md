## #2: Simpan Perubahan Revisi dengan Git Commit
---

![www.oao-7.xyz](http://jlord.us/git-it/assets/imgs/clone.png)

Pada panduan yang sebelumnya, kita sudah membuat repositori kosong. Belum ada apa-apa di sana.

Sekarang coba tambahkan sebuah file baru.

Sebagai contoh, saya akan menambahkan 1 file panduan praktikum baru dan 2 file-lainya adalah file gambar screenshot.png `praktikum-2`.

![ss](Snapshoot/img/ss.png)

Setalah ditambahkan, coba ketik perintah `git status` untuk melihat status repositorinya.

![](Snapshoot/Screen%20Shot%202021-02-27%20at%202.03.48%20PM.png)

Berdasarkan keterangan di atas, saat ini kita berada cabang **(branch)** master dan ada `2 file `yang belum ditambahkan ke Git.

## Tiga Kelompok Kondisi File dalam Git

Sebelum kita membuat revisi, kita akan berkenalan dulu dengan `tiga kondisi file dalam Git.`

1. Modified

*Modified* adalah kondisi dimana revisi atau perubahan sudah dilakukan, tetapi belum ditandai dan belum disimpan di version control. Contohnya pada gambar di atas, ada 2 file  yang dalam kondisi modified.

2. Staged

*Staged* adalah kondisi dimana revisi sudah ditandai, tetapi belum disimpan di *version control*. Untuk mengubah kondisi file dari modified ke staged gunakan perintah `git add nama_file`. Contoh:

```
git add nama_file.md
```
3. Commited

*Commited* adalah kondisi dimana revisi sudah disimpan di *version control*. perintah untuk mengubah kondisi file dari *staged* ke *commited* adalah git commit.

## Membuat Revisi Pertama

Baiklah, sekarang kita sudah tahu kondisi-kondisi file dalam Git. Selanjutnya, silahkan  coba ubah kondisi file yang kalian tambahkan menjadi `staged` dengan perintah `git add.`

```
git add nama_file.md
git add nama_file1.html
git add nama_file2.php
```
atau kita bisa melaukannya seperti ini:

```
git add nama_file.md nama_file1.htnl nama_file2.php
```
atau:

```
git add *.md (hanya file dengan exstensi (.md)
```

Atau seperti ini (semua file dan direktori):

```
git add .
```
Setelah itu, cobalah ketik perintah `git status` lagi. Kondisi filenya sekarang akan menjadi `staged.`

![ss03](Snapshoot/Screen%20Shot%202021-02-27%20at%203.07.17%20PM.png)

Coba lihat gambar di atas, ada 3 file yg status-nya *staged* karena saya menambahkan 1 file baru berupa gambar screenshot.png.

Setelah itu, ubah kondisi file tersebut ke *commited* agar semua perubahan disimpan oleh Git.

```
git commit -m "menambahkan modul praktikum ke-2"
```

Setelah itu, coba cek dengan perintah `git status `lagi.


```zsh
➜  PABWEB-B (main) ✗ git commit -m "menambahkan modul praktikum ke-2"
[main 003435b] menambahkan modul praktikum ke-2
 3 files changed, 61 insertions(+)
 create mode 100644 Modul Praktikum/0-Modul Git/Praktikum-2-Simpan-Perubahan-Revisi-dengan-Git-Commit.md
 create mode 100644 Modul Praktikum/0-Modul Git/Snapshoot/Screen Shot 2021-02-27 at 2.03.48 PM.png
 create mode 100644 Modul Praktikum/0-Modul Git/Snapshoot/img/ss.png
➜  PABWEB-B (main) ✗ 
```

Selamat, Revisi pertama sudah kita buat. Selanjutnya cobalah untuk membuat revisi kedua.

## Membuat Revisi Kedua
---

Ceritannya ada perubahan yang akan kita lakukan pada file `panduan praktikum-2.md`. **Silahkan anda kondisikan dengan file anda saat ini,** kemudian modifikasi file tersebut. Sebagai contoh saya mengisinya seperti ini. *saya akan menambahkan referensi pada panduan praktikum ke-2 ini.*

![referensi](Snapshoot/Screen%20Shot%202021-02-27%20at%204.46.37%20PM.png)

Setelah itu ketik lagi perintah `git status.`


```bash
➜  PABWEB-B (main) ✔ git status
On branch main
Your branch is up to date with 'origin/main'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   Modul Praktikum/0-Modul Git/Praktikum-2-Simpan-Perubahan-Revisi-dengan-Git-Commit.md

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        Modul Praktikum/0-Modul Git/Snapshoot/Screen Shot 2021-02-27 at 4.46.37 PM.png

no changes added to commit (use "git add" and/or "git commit -a")
➜  PABWEB-B (main) ✗ 

```
Terlihat disana, file modul praktikum/0-modul Git/**Praktikum-2** sudah dimodifikasi. Kondisinya sekarang berada dalam ***modified***. Lakukan ***commit*** lagi seperti revisi pertama.

```
git add nama_file
git commit -m "tambahkan pesan commit"
```
Dengan demikian, revisi kedua sudah disipan oleh Git. Mungkin anda belum tahu maksud dari argumen `-m,` argumen tersebut untuk menambahkan pesan setiap menyimpan revisi.

![revisi-ke-2](https://1.bp.blogspot.com/-_wKH9usn7FI/WLFdN6wLvcI/AAAAAAAAEKc/XQzBtD98naUfImdeuxZf8NDQ1gXKDqrZQCPcB/s1600/timeline-dua-revisi.png)

`Sekarang Git sudah mencatat dua revisi yang sudah kita lakukan.` Kita bisa ibaratkan revisi-revisi ini sebagai ***checkpoint*** pada Game. Apabila nanti ada kesalahan, kita bisa kembali ke ***checkpoint*** ini.




## Referensi

1. [GIT Cheat Sheet](https://www.javatpoint.com/git-cheat-sheet)

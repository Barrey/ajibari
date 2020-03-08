---
title: 'Promise di javascript'
published: true
process:
    markdown: true
	twig: true
headline: 'Konsep dan penggunaan promise di javascript'
---

Apa itu promise ? Promise di javascript adalah sebuah object yang mempunyai parameter sebuah function yang mempunyai 2 argumen, resolve dan reject.
Promise bisa dibilang operasi yang digunakan untuk menghandle asynchronous di javascript sehingga lebih terstruktur dan terhindar dari callback hell javascript. 
Asynchronous sendiri merupakan proses yang tidak menunggu perintah sebelumnya selesai. 

Mari kita lihat contoh kasus :

**Budi akan dibelikan tas baru jika dia masuk ranking 10 besar.**

Pernyataan diatas bisa dengan mudah kita implementasikan pada javascript hanya dengan **if else** saja. 

    function cekHadiahRanking(nama, rank){

        let bag;

        if(rank <= 10){
             bag = true;
             console.log(nama, 'Dapat hadiah tas baru');
        }

        if(bag == true){
            console.log('Hati senang karena tas baru');
        }else{
            console.log('Hati sedih karena tidak mendapatkan tas baru');
        }
    }
    
    cekHadiahRanking('Budi', 10);

Maka ketika dijalankan akan menghasilkan output : 

	Budi Dapat hadiah tas baru
	Hati senang karena tas baru

Bagaimana kalau pada statemen logika di pengecekan ranking memakan waktu lama, misalkan ada pencarian di database yang kompleks atau ada pemanggilan web service lain yang memakan waktu beberapa detik? Mari kita coba rubah kode nya menjadi seperti ini


    function cekHadiahRanking(nama, rank){

        let bag;
        
        setTimeout(function(){
			if(rank <= 10){
			     bag = true;
			     console.log(nama, 'Dapat hadiah tas baru');
			}
        }, 3000);

        if(bag == true){
            console.log('Hati senang karena tas baru');
        }else{
            console.log('Hati sedih karena tidak mendapatkan tas baru');
        }
    }
    
    cekHadiahRanking('Budi', 10);
    
Maka ketika dijalankan akan menghasilkan output :

	Hati sedih karena tidak mendapatkan tas baru
	Budi  Dapat hadiah tas baru

Jelas output yang diberikan salah. Ini karena konsep asynchronous di Node.js sehingga kode tidak perlu menunggu eksekusi kode sebelumnya selesai. Jadi pada kasus ini, lebih tepat jika kita menggunakan **Promise** untuk menghandle asynchronous.

Mari kita rubah kode nya menjadi seperti dibawah :

	function checkHadiahRanking(nama, rank){
	    let janji = new Promise(function(resolve, reject){
		if(rank <= 10){
		    resolve(nama);
		}
		reject(nama);
	    });

	    return janji;
	}
	
	checkHadiahRanking('Budi', 10)
    .then(function(result){
        console.log(result, 'Dapat hadiah tas baru')
    })
    .then(function(){
    	console.log('Hati senang karena mendapat tas baru');
    })
    .catch(function(err){
        console.log(err, 'sedih karena tidak mendapatkan tas baru');
    })
   
   Maka ketika dijalankan akan menghasilkan output : 
   
   	Budi senang karena mendapat tas baru
	Hati senang karena mendapat tas baru

Jika kita lihat penggunaan Promise diatas, kita bisa melihat resolve dan reject.
**Resolve** adalah perlakuan ketika sebuah Promise ditepati dan **Reject** adalah perlakuan ketika sebuah Promise tidak ditepati.

Nah, bagaimana jika Budi mendapatkan rangking 12? Promise diatas akan langsung ke statemen **catch** tanpa membaca statemen **then** yang akan memberikan output :

	Budi sedih karena tidak mendapatkan tas baru
	
Ok, cukup untuk penjelasan singkat ini. Jangan terlalu panjang nanti malah susah cernanya. Penggunaan **Promise** lebih kompleks akan dijelaskan di artikel berikutnya.
	


   
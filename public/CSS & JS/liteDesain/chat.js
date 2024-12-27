send.addEventListener("click", () => userchat());

const scrollElement = document.querySelector(".scroll-body");
const scrollElementB = document.querySelector(".bot-ibox");
const scrollUser = document.querySelector(".sendLayer");

		scrollUser.addEventListener("click", function () {
			scrollElement.scrollTop += 1000;
      scrollElementB.scrollTop += 1000;
		});




input.addEventListener("keyup", (event) => {
  if (event.keyCode === 13) {
  userchat();
  }
});

const userchat = () => {
  const pesan = input.value;
  chat(pesan, "user");
  input.value = "";
  setTimeout(() => {
  botchat(pesan);
  setScrollPosition();
  }, 1000);
};

const chatBody = document.querySelector(".scroll-body");

const setScrollPosition = () => {
  if (chatBody.scrollHeight > 0) {
    chatBody.scrollTop = chatBody.scrollHeight;
  }
};


const botchat = (pesan) => {
const res = botrespon(pesan);
chat(res);
};


const responBot = {
  "Bagaimana cara menambahkan data?": "Anda cukup klik 'Menu Admin Database,' lalu klik 'Tambah Data.' Di sana kamu bisa menambahkan Nama, NIM, nomor WhatsApp, Instagram, Facebook, hobi, pendidikan yang sedang dijalani, dan menambahkan foto profil.",
  "Bagaimana cara mengedit data?": "Anda cukup klik 'Menu Admin Database,' lalu klik 'Edit Data.' Di sana kamu bisa mengubah Nama, NIM, nomor WhatsApp, Instagram, Facebook, hobi, pendidikan yang sedang dijalani, dan mengubah foto profil.",
  "Bagaimana cara menghapus data?": "Anda cukup klik 'Menu Admin Database,' lalu klik 'Hapus Data.' Di sana kamu tinggal pilih data mana yang ingin dihapus.",
  "Bagaimana cara mengubah wallpaper?": "Anda cukup klik menu berbentuk tiga garis disebelah pojok kanan atas, lalu klik 'Wallpaper.' Di sini tersedia wallpaper reolusi 4K Ultra HD hingga 6K Ultra HD.",
  "Bagaimana cara bermain game?": "Anda cukup klik menu berbentuk tiga garis disebelah pojok kanan atas, lalu klik 'Game.' Di sini hanya tersedia game Tic-Tac-Toe yang asal comot saja.",
  "h": "Halo" ,
  "Kenapa dengan zombie?": "Dia tidak memiliki otak untuk berpikir.",
  "Kenapa dengan zombie": "Dia tidak memiliki otak untuk berpikir.",
  "kenapa dengan zombie?": "Dia tidak memiliki otak untuk berpikir.",
  "kenapa dengan zombie": "Dia tidak memiliki otak untuk berpikir.",
  "Halo": "Halo, apa kabar kamu?",
  "halo": "Halo juga",
  "Hai": "Hai",
  "hai": "Hai",
  "H": "Hai",
  "h": "Hai",
  "Saya baik-baik saja": "Syukurlah, semoga sehat selalu.",
  "Saya baik-baik saja, Steve": "Syukurlah, semoah sehat selalu.",
  "saya baik-baik saja": "Syukurlah, semoga sehat selalu.",
  "saya baik-baik saja, Steve": "Syukurlah, semoga sehat selalu.",
  "Saya kurang enak badan": "Wah, kamu perlu istirahat.",
  "Saya kurang enak badan, Steve": "Wah, kamu perlu istirahat.",
  "saya kurang enak badan": "Wah, kamu perlu istirahat.",
  "saya kurang enak badan, Steve": "Wah, kamu perlu istirahat.",
  "Saya sedang sakit": "Kamu harus segera meminum obat yang disarankan, kamu perlu istirahat yang banyak. Silahkan tinggalkan chat dan tidur.",
  "Saya sedang sakit, Steve": "Kamu harus segera meminum obat yang disarankan, kamu perlu istirahat yang banyak. Silahkan tinggalkan chat dan tidur.",
  "saya sedang sakit": "Kamu harus segera meminum obat yang disarankan, kamu perlu istirahat yang banyak. Silahkan tinggalkan chat dan tidur.",
  "saya sedang sakit, Steve": "Kamu harus segera meminum obat yang disarankan, kamu perlu istirahat yang banyak. Silahkan tinggalkan chat dan tidur.",
  "Steve": "Iya, ada apa?",
  "steve": "Iya, ada apa?",
  "Hey!": "Kenapa?",
  "Apakah kamu bisa membunuh Zombie itu untukku?": "Tentu saja bisa, sekelas Ender Dragon dan Wither juga bisa.",
  "apakah kamu bisa membunuh Zombie itu untukku?": "Tentu saja bisa, sekelas Ender Dragon dan Wither juga bisa.",
  "Apakah kamu bisa membunuh Zombie itu untukku": "Tentu saja bisa, sekelas Ender Dragon dan Wither juga bisa.",
  "apakah kamu bisa membunuh Zombie itu untukku": "Tentu saja bisa, sekelas Ender Dragon dan Wither juga bisa.",
  "Saya butuh hiburan": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "saya butuh hiburan": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "Saya bosan": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "saya bosan": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "Bosan": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "bosan": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "Carikan lagu yang bagus": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "carikan lagu yang bagus": "Coba masukkan link ini ke mesin pencarian kamu => https://youtu.be/dQw4w9WgXcQ",
  "DKP itu melelahkan :(": "Iya, saya paham. Apalagi waktu pengerjaannya hanya satu 10 hari.",
  "DKP itu melelahkan": "Iya, saya paham. Apalagi waktu pengerjaannya hanya satu 10 hari.",
  "dkp itu melelahkan": "Iya, saya paham. Apalagi waktu pengerjaannya hanya satu 10 hari.",
  today: new Date().toDateString(),
};

// time: new Date().toLocaleTimeString(),

const botrespon = (pesan) => {
return responBot[pesan] == undefined ? "Coba ulangi lagi?" : responBot[pesan];
};






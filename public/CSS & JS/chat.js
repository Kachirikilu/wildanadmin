send = document.getElementById("sendChat")
input = document.getElementById("inputChat")

send.addEventListener("click", () => userchat());

const scrollElement = document.querySelector(".scroll-body");
const scrollElementB = document.querySelector(".bot-ibox");
const scrollUser = document.querySelector(".sendLayer");

		scrollUser.addEventListener("click", function () {
			scrollElement.scrollTop += 1000;
		});

input.addEventListener("keyup", (event) => {
  if (input.value !== "") {
    if (event.keyCode === 13) {
      userchat();
      scrollElement.scrollTop += 999999999999;
    }
  }
});

const userchat = () => {
  const pesan = input.value;
  chat(pesan, "user");
  input.value = "";
  setTimeout(() => {
  botchat(pesan);
  setScrollPosition();
  }, 1200);
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
  "Bagaimana cara menambahkan data?": "Jika kamu seorang CEO & Admin, kamu cukup klik 'Create'.",
  "Bagaimana cara menambahkan artikel?": "Jika kamu seorang CEO & Admin, kamu cukup klik 'Create'.",
  "Bagaimana cara mengedit data?": "Jika kamu seorang CEO & Admin, kamu cukup klik 'Edit' yang tersedia pada Tools di setiap artikel.",
  "Bagaimana cara mengedit artikel?": "Jika kamu seorang CEO & Admin, kamu cukup klik 'Edit' yang tersedia pada Tools di setiap artikel.",
  "Bagaimana cara menghapus data?": "Jika kamu seorang CEO & Admin, kamu cukup klik 'Hapus' yang tersedia pada Tools di setiap artikel.",
  "Bagaimana cara menghapus artikel?": "Jika kamu seorang CEO & Admin, kamu cukup klik 'Hapus' yang tersedia pada Tools di setiap artikel.",
  "Bagaimana cara mengubah data profil?": "Klik foto profil kamu di bagian navigasi, di sana kamu bisa mengubah dan menghapus akun kamu.",
  "Bagaimana cara menghapus data profil?": "Klik foto profil kamu di bagian navigasi, di sana kamu bisa mengubah dan menghapus akun kamu.",
  "h": "Halo" ,
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
  Today: new Date().toDateString(),
  today: new Date().toDateString()
  // Time: new Date().toLocaleTimeString()
  // time: new Date().toLocaleTimeString()
};

const botrespon = (pesan) => {
return responBot[pesan] == undefined ? "Coba ulangi lagi?" : responBot[pesan];
};
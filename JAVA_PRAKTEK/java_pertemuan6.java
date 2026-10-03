
import java.util.Scanner;

public class java_pertemuan6 {

    public static void main(String[] args) {
        Scanner masuk = new Scanner(System.in);

        int harga, hargatiket = 0, hargapopcorn = 0;

        System.out.println("Masukan film yang akan di tonton :");
        String film = masuk.nextLine();

        switch (film) {
            case "Avengers Doomsday":
                System.out.println("Film yang anda pilih: " + film);
                hargatiket = 70000;
                break;
            case "Harusnya Horror":
                System.out.println("Film yang anda pilih: " + film);
                hargatiket = 50000;
                break;
            case "Tunggu Aku Sukses":
                System.out.println("Film yang anda pilih: " + film);
                hargatiket = 55000;
                break;
            default:
                System.out.println("Silahkan Masukan Film yang valid.");
        }

        System.out.println("");
        System.out.println("Apakah anda ingin memesan popcorn (yes/no):");
        String popcorn = masuk.nextLine();

        switch (popcorn) {
            case "yes":
                System.out.println("");
                System.out.println("Tipe apa yang ingin anda pesan (large/medium/small):");
                String ukuran_popcorn = masuk.nextLine();

                switch (ukuran_popcorn) {
                    case "large":
                        System.out.println("Popcorn yang anda pilih: " + ukuran_popcorn);
                        hargapopcorn = 35000;
                        break;
                    case "medium":
                        System.out.println("Popcorn yang anda pilih: " + ukuran_popcorn);
                        hargapopcorn = 25000;
                        break;
                    case "small":
                        System.out.println("Popcorn yang anda pilih: " + ukuran_popcorn);
                        hargapopcorn = 15000;
                        break;
                    default:
                        System.out.println("Ukuran tidak valid");
                }
                break;
            default:
                System.out.println("Anda tidak pesan popcorn");
        }

        System.out.println("===========================");
        System.out.println("Harga Tiket: " + hargatiket);
        System.out.println("Harga Popcorn: " + hargapopcorn);
        harga = hargatiket + hargapopcorn;

        System.out.println("Total Biaya Anda Adalah " + harga);
    }
}

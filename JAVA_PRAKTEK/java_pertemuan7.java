
import java.util.Scanner;

public class java_pertemuan7 {

    public static void main(String[] args) {

        Scanner masuk = new Scanner(System.in);
        System.out.println("Masukan jumlah mahasiswa:");
        int jumlah = masuk.nextInt();
        masuk.nextLine();

        String[] namamhs = new String[jumlah];
        String[] nim = new String[jumlah];
        int[] umur = new int[jumlah];
        String[] tglLahir = new String[jumlah];

        for (int i = 0; i < jumlah; i++) {
            System.out.println("Data mahasiswa ke " + (i + 1));

            System.out.print("Nama panjang   : ");
            namamhs[i] = masuk.nextLine();

            System.out.print("NIM            : ");
            nim[i] = masuk.nextLine();

            System.out.print("Umur           : ");
            umur[i] = masuk.nextInt();
            masuk.nextLine();

            System.out.print("Tanggal lahir  : ");
            tglLahir[i] = masuk.nextLine();

            System.out.println();
        }

        System.out.println("========DATA MAHASISWA========");

        for (int i = 0; i < jumlah; i++) {
            System.out.println("Mahasiswa ke " + (i + 1));
            System.out.println("Nama panjang   : " + namamhs[i]);
            System.out.println("NIM            : " + nim[i]);
            System.out.println("Umur           : " + umur[i]);
            System.out.println("Tanggal lahir  : " + tglLahir[i]);
            System.out.println("------------------------------");
        }
    }
}

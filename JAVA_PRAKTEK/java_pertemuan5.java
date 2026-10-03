
import java.util.Scanner;

public class java_pertemuan5 {

    public static void main(String[] args) {
        Scanner masuk = new Scanner(System.in);

        System.out.println("masukkan nama anda");
        String nama = masuk.nextLine();

        System.out.println("masukkan nim anda");
        String nim = masuk.nextLine();

        System.out.println("nilai tugas anda");
        double tugas = masuk.nextDouble();

        System.out.println("nilai uts anda");
        double uts = masuk.nextDouble();

        System.out.println("nilai uas anda");
        double uas = masuk.nextDouble();

        double nilai = (0.30 * tugas) + (0.30 * uts) + (0.40 * uas);

        System.out.println("====================");
        System.out.println("Nama: " + nama);
        System.out.println("NIM: " + nim);
        System.out.println("Total nilai anda " + nilai);

        if (nilai >= 80) {
            System.out.println("selamat nilai anda A");
        } else if (nilai >= 65) {
            System.out.println("selamat nilai anda B");
        } else if (nilai >= 40) {
            System.out.println("selamat nilai anda C");
        } else if (nilai >= 0) {
            System.out.println("selamat nilai anda D");
        }
    }
}

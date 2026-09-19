
import java.util.Scanner;

public class pert4 {

    public static void main(String[] args) {
        Scanner masuk = new Scanner(System.in);
        String nama, kelas;
        double angka1, angka2;

        System.out.print("Masukan nama anda : ");
        nama = masuk.nextLine();

        System.out.print("Masukan kelas anda : ");
        kelas = masuk.nextLine();

        System.out.println();

        System.out.println("Data nama anda : " + nama);
        System.out.println("Data kelas anda : " + kelas);

        System.out.println();

        System.out.print("Masukan angka pertama : ");
        angka1 = masuk.nextDouble();

        System.out.print("Masukan angka kedua : ");
        angka2 = masuk.nextDouble();

        System.out.println();

        double pertambahan = angka1 + angka2;
        double pengurangan = angka1 - angka2;
        double perkalian = angka1 * angka2;
        double pembagian = angka1 / angka2;

        System.out.println("Hasil pertambahan " + angka1 + " dan " + angka2 + " adalah " + pertambahan);
        System.out.println("Hasil pengurangan " + angka1 + " dan " + angka2 + " adalah " + pengurangan);
        System.out.println("Hasil perkalian " + angka1 + " dan " + angka2 + " adalah " + perkalian);
        System.out.println("Hasil pembagian " + angka1 + " dan " + angka2 + " adalah " + pembagian);

        masuk.close();
    }
}

import java.util.*;
class Addition{
    public static void main(String args[])
    {
        int no1,no2,res;
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the first number");
        no1 = sc.nextInt();
        System.out.println("Enter the second number");
        no2 = sc.nextInt();
        res=no1+no2;
        System.out.println(" Sum of "+no1+" and "+no2+" is "+res);
    }
}
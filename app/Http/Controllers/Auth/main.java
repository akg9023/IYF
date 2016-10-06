import java.io.*;
import java.util.*;
class emp{
public
int basic;
int DA;
int HRA;
int OT;
void get_det(){
Scanner s= new Scanner(System.in);
System.out.println("enter the details in the given order:");
System.out.println("basic:\nDA:\nHRA:\nOT:");
basic=s.nextInt();
DA=s.nextInt();
HRA=s.nextInt();
OT=s.nextInt();
}

}
class manager extends emp{
    double g_sal;
   double gross_sal(){
    g_sal=(basic+0.5*DA+0.7*HRA+500*OT);
    return g_sal;
    }

}
class cashier extends emp{
double g_sal;
    double gross_sal(){
    g_sal=(basic+0.4*DA+0.6*HRA+200*OT);
   return g_sal;
    }
}
class main{

public static void main(String[] args){
try{
manager m=new manager();
cashier c=new cashier();
m.get_det();
c.get_det();
System.out.println("The manager's gross salary is:"+m.gross_sal());
System.out.println("The cashier's gross salary is:"+c.gross_sal());
}
catch(Exception e)
{
System.out.println("error:");
}
}
}


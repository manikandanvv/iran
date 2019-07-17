import java.util.*;
class robot{
    public static void main(String arg[]){
        Scanner in=new Scanner(System.in);
        int col=in.nextInt();
        int row=in.nextInt();
        String ini=in.next();
        in.nextLine();
        String mov=in.nextLine();
        
        String init[]=ini.split("-");
        String movn[]=mov.split(" ");
        
        int curx=Integer.parseInt(init[0]);
        int cury=Integer.parseInt(init[1]);
        String dir=init[2];
        boolean flag=true;
        
        for(int i=0;i<movn.length;i+=2){
    
            String temp=movn[i];
            String moo=movn[i+1];
            
            if(curx<=col&&cury<=row){
               if(dir.equals("E")){
                if(temp.equals("R")&&moo.equals("M")){
                    dir="S";
                    cury-=1;
                    //System.out.println("move south"+cury+" "+curx);
                }
                else if(temp.equals("L")&&moo.equals("M")){
                    dir="N";
                    cury+=1;
                    //System.out.println("move North"+cury+" "+curx);
                }
            }
            else if(dir.equals("W")){
                if(temp.equals("R")&&moo.equals("M")){
                    dir="N";
                    cury+=1;
                    //System.out.println("move north"+cury+" "+curx);
                }
                else if(temp.equals("L")&&moo.equals("M")){
                    dir="S";
                    cury-=1;
                    //System.out.println("move south"+cury+" "+curx);
                }
            }
            else if(dir.equals("S")){
                if(temp.equals("R")&&moo.equals("M")){
                    dir="W";
                    curx-=1;
                   // System.out.println("move west"+cury+" "+curx);
                }
                else if(temp.equals("L")&&moo.equals("M")){
                    dir="E";
                    curx+=1;
                   // System.out.println("move east"+cury+" "+curx);
                }
            }
            else if(dir.equals("N")){
                if(temp.equals("R")&&moo.equals("M")){
                    dir="E";
                    curx+=1;
                    //System.out.println("move east"+cury+" "+curx);
                }
                else if(temp.equals("L")&&moo.equals("M")){
                    dir="W";
                    curx-=1;
                    //System.out.println("move west"+cury+" "+curx);
                }
            }
            if(curx>col){
                curx--;
                flag=false;
                break;
            }
            else if(cury>row){
                cury--;
                flag=false;
                break;
            }
        }
        else{
            flag=false;
            break;
        }
        }
        if(flag){
            System.out.print(curx+"-"+cury+"-"+dir);
        }
        else{
            System.out.print(curx+"-"+cury+"-"+dir+"-ER");
        }
        
    }
}


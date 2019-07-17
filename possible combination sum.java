import java.util.*;
class uni_steps{
    public static void main(String arg[]){
        Scanner in=new Scanner(System.in);
        int k=in.nextInt();
        int n=in.nextInt();
        int arr[]=new int[n];
        for(int i=0;i<n;i++){
            arr[i]=in.nextInt();
        }
        int count2=0;
        for(int i=0;i<arr.length;i++){
            int sum1=0,summ=0;
            while(sum1<k){
                sum1+=arr[i];
                summ++;
               // System.out.println("summ"+summ);
                if(sum1==k){
                    count2++;
                    //System.out.println(arr[i]+"  "+count2);
                    break;
                }
            }
            for(int j=i+1;j<arr.length;j++){
                    int count=1;
                    int sum=arr[j];
                    while(sum<k){
                        sum+=arr[i];
                        count++;
                       // System.out.println(count+"--");
                        if(sum==k){
                            count2+=count;
                            //System.out.println(arr[i]+" "+arr[j]+"="+count2);
                        }
                    }
            }
        }
        if(count2==0){
            System.out.print(-1);
        }
        else
          System.out.print(count2);
    }
}

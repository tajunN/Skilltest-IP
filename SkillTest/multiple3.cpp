#include<stdio.h>

int solution(int par)
{
	int jumlah=0, i, k3=3,k5=5,hasil=0,data;
	
	while(hasil<par)
	{
//		jumlah = jumlah+k3;
//		printf(" %d",k3);
//		k3=k3+3;
//		hasil=k3;
		
		if(k3<k5)
		{
			jumlah = jumlah+k3;
			printf(" %d",k3);
			hasil=k3;
			k3=k3+3;
			
		}else if(k3==k5)
		{
			k5=k5+5;
		}
		else{
			jumlah =jumlah+k5;
			printf(" %d",k5);
			hasil = k5;
			k5 = k5+5;	
		}
		if((k3>=par)||(k5>=(par+1)))
		{
			break;
		}
	}
	
	printf("\t (%d)",jumlah);
	
	
	

	
//	for (i=1; i<=par; i++) {
//		jumlah[i] = k1*i;
//    	printf("%d ",jumlah[i]);
//  }
 
  printf("\n");
}

int main(void)
{
  printf("## Program Bahasa C Deret Angka ## \n");
  printf("================================== \n\n");
 
  int jumlah_deret,i;
 
  printf("Input parameter : ");
  scanf("%d",&jumlah_deret);
  
  solution(jumlah_deret);

 
  return 0;
}

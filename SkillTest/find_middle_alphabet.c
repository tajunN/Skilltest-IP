#include <stdio.h>
#include <conio.h>

//inputan harus menggunakan huruf kapitall

void middle(char first, char last)
{
	char abjad,ct1,ct2;
	int a=1,b,i;
	char abj[100][100];
	for (abjad='A'; abjad<='Z'; abjad++)
	{
		for(i=1;i<=2;i++)
		{
			if(i==1){
				abj[a][i]=a;
			}else{
				abj[a][i]=abjad;
			}
			
			
		}
		a++;
	}
	
	int j,bil1,bil2,bil3;
	for(j=1;j<=27; j++)
	{

		if(abj[j][2]==first)
		{
			bil1=abj[j][1];
		}else if(abj[j][2]==last)
		{
			bil2=abj[j][1];
		}
	}
	int tengah, sisa;
	sisa = (bil1+bil2)%2;
	
	tengah = (bil1+bil2)/2;
	bil3 = sisa +tengah;
	
	if(sisa==1)
	{
		ct1 = abj[tengah][2];
		ct2 = abj[bil3][2];
		printf("The Middle Between %c and %c is %c%c",first, last,ct1,ct2);
	}else{
		ct1 = abj[tengah][2];
		printf("The Middle Between %c and %c is %c ", first, last,ct1);
	}
}
int main()
{
	
	
    char huruf1, huruf2;
    puts("First Letter (A - Z) : ");
    huruf1 = getch();
    printf("Last Letter (A - Z): ");
    huruf2 = getch();
    printf("\nThe First Letter = %c and Last Letter =  %c\n", huruf1, huruf2);
	
	middle(huruf1, huruf2);
	
//	int j;
	 
    return 0;
}

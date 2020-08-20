#include <bits/stdc++.h>

using namespace std;

int main()
{
    int lnth = 10;
    int ara[lnth] = {1,3,4,2,5,9,7,6,10,8};

    for(int i = 0; i < lnth-1; i++)
    {
        for(int j = 0; j < lnth - i - 1; j++)
        {
            if(ara[j] > ara[j+1])
                swap(ara[j], ara[j+1]);
        }
    }
    for(int i = 0; i < lnth; i++)
        cout << ara[i] << " ";
    cout << endl;
    return 0;
}

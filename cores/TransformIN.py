from sklearn import preprocessing
import pandas as pd

def transformInput(values):
    
    clean_data = pd.read_csv('cores/new_cars_data.csv',  names = ["Name", "Location", "Used", "Year", "Milleage", "Transmision", "Price"])

    x = clean_data.iloc[:,:6]
    
    nm_LE = preprocessing.LabelEncoder()
    ln_LE = preprocessing.LabelEncoder()
    ud_LE = preprocessing.LabelEncoder()
    tm_LE = preprocessing.LabelEncoder()
    
    nm_LE.fit(x.Name)
    ln_LE.fit(x.Location)
    ud_LE.fit(x.Used)
    tm_LE.fit(x.Transmision)
    
    result = []
    
    tran_n = int(nm_LE.transform([values[0]]))
    tran_l = int(ln_LE.transform([values[1]]))
    tran_u = int(ud_LE.transform([values[2]]))
    tran_t = int(tm_LE.transform([values[5]]))
    yr = int(values[3])
    ml = int(values[4])
    
    result = [tran_n, tran_l, tran_u, yr, ml, tran_t]
    return result
import pandas as pd
import numpy as np

container = pd.read_csv('mps_raw.csv', encoding= 'unicode_escape')

code = []

for i_code in container['code'].values:
    code.append(i_code.replace('\xa0','').replace('-0','').replace('-',''))

name = []

for i_name in container['name'].values:
    name.append(i_name.replace('\xa0',''))

program = ['MPS']*len(code)
c_index = [' ']*len(code)

new_df = pd.DataFrame(np.transpose(np.array([c_index, program, code, name])), columns=['id', 'program', 'code', 'name'])

new_df.to_csv('mps_formatted.csv', index=False, header=False)



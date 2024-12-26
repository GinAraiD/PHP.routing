import './index.css';
import { Link } from '@inertiajs/react';
export default function Index({ products }) {
    return (
        <>
            <h1 style={{ padding: '10px' }}>Product Index</h1>
            <div >
                <ul className='product-grid'>
                {products.map((product) => (
                    <li key={product.id}>
                        <Link href={`/products/${product.id}`}>
                            {product.name} - ${product.price}
                        </Link>
                        <img src={product.img} alt="" width={'200px'} />
                    </li>
                ))}
            </ul>
        </div >
        </>
    );
}
